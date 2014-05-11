<?php

namespace Sk9\Todo;

class TaskCollection implements \Countable
{

    public $tasks;


    public function add(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function count()
    {
        return count($this->count());
    }
}
