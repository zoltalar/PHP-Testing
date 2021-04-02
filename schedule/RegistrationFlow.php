<?php

namespace Schedule;

use Schedule\Model\Company;

class RegistrationFlow
{
    /** @var Config */
    protected $config;

    /** @var Step[] */
    protected $steps = [];

    /** @var Employee */
    protected $employee;

    public function __construct(Config $config)
    {
        $this->config = $config;

        $this->addStep(new OverviewStep($config));
        $this->addStep(new EmployeeStep($config));
        $this->addStep(new DependentsStep($config));
        $this->addStep(new AppointmentsStep($config));

        if ( (int) $this->config->enable_downloads_step == 1) {
            $this->addStep(new DownloadStep($config));
        }

        $this->addStep(new SummaryStep($config));
        $this->addStep(new ConfirmationStep($config));

        foreach ($this->steps as $step) {
            print_r($step->getName());
        }
    }

    public function addStep(Step $step)
    {
        $this->steps[] = $step;
    }

    public function getDependents()
    {
        return $this->employee->dependents->find_all();
    }
}