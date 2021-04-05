<?php

namespace Schedule;

class RegistrationFlow
{
    const TYPE_NEW = 'new';
    const TYPE_MODIFY = 'modify';

    const TYPES = [
        self::TYPE_NEW,
        self::TYPE_MODIFY
    ];

    /** @var Config */
    protected $config;

    /** @var Step[] */
    protected $steps = [];

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
        $config = $this->config;
        $employee = $this->employee;

        $this->addStep(new OverviewStep($config, $employee));
        $this->addStep(new EmployeeStep($config, $employee));
        $this->addStep(new DependentsStep($config, $employee));
        $this->addStep(new AppointmentsStep($config, $employee));

        if ( (int) $this->config->enable_downloads == 1) {
            $this->addStep(new DownloadStep($config, $employee));
        }

        $this->addStep(new SummaryStep($config, $employee));
        $this->addStep(new ConfirmationStep($config, $employee));
    }

    public function addStep(Step $step)
    {
        $this->steps[] = $step;
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