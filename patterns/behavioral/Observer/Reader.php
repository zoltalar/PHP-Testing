<?php

namespace Patterns\Behavioral\Observer;

// Observer - entity that receives news
use SplSubject;

class Reader implements \SplObserver
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function update(SplSubject $subject)
    {
        echo sprintf("%s is reading the <em>%s</em> article.", $this->getName(), $subject->getTitle());
        echo '<br>';
    }
}