<?php

namespace Patterns\Behavioral\Observer;

// Subject - entity that makes news
use SplObserver;

class Article implements \SplSubject
{
    protected $title;
    private $readers = array();

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function attach(SplObserver $observer)
    {
        $this->readers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->readers, true);

        if ($key) {
            unset($this->readers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->readers as $reader) {
            $reader->update($this);
        }
    }
}