<?php

class EmployeeDisclaimerStep extends BaseStep implements Stepable
{
    public function isDone(): bool
    {
        return isset($this->session['employee_disclaimer_accepted']);
    }
}