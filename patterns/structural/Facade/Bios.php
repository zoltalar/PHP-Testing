<?php

namespace Patterns\Stuctural\Facade;

interface Bios
{
    public function execute();
    public function waitForKeyPress();
    public function launch(OperatingSystem $os);
    public function powerDown();
}