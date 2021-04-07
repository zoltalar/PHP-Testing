<?php

namespace Schedule;

use Schedule\Contracts\Stepable as StepableContract;
use Schedule\Traits\Stepable;

class RegistrationFlow implements StepableContract
{
    use Stepable;

    const TYPE_NEW = 'new';
    const TYPE_MODIFY = 'modify';

    const TYPES = [
        self::TYPE_NEW,
        self::TYPE_MODIFY
    ];

    /** @var Config */
    protected $config;

    /** @var Employee */
    protected $employee;

    public function __construct(string $type, Config $config, Employee $employee)
    {
        if ( ! in_array($type, self::TYPES)) {
            throw new \Exception("{$type} type not supported");
        }

        $this->type = $type;
        $this->config = $config;
        $this->employee = $employee;

        $this->addSteps();
    }

    protected function addSteps()
    {
        $type = $this->type;
        $config = $this->config;
        $employee = $this->employee;

        $this->addStep(new OverviewStep($type, $config, $employee));
        $this->addStep(new EmployeeStep($type, $config, $employee));
        $this->addStep(new DependentsStep($type, $config, $employee));
        $this->addStep(new AppointmentsStep($type, $config, $employee));

        if ( (int) $this->config->enable_downloads == 1) {
            $this->addStep(new DownloadStep($type, $config, $employee));
        }

        $this->addStep(new SummaryStep($type, $config, $employee));
        $this->addStep(new ConfirmationStep($type, $config, $employee));
    }

    public function getCurrentStep(): ?Step
    {
        foreach ($this->steps as $step) {
            if ($step->isCurrent()) {
                return $step;
            }
        }

        return null;
    }

    public function isDone()
    {
        $i = 1;

        foreach ($this->steps as $step) {
            if ($step->isDone()) {
                $i++;
            }
        }

        return $i = count($this->steps);
    }

    public function getDependents()
    {
        return $this->employee->dependents->find_all();
    }
}