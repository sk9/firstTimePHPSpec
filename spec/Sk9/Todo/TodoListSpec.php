<?php

namespace spec\Sk9\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sk9\Todo\Task;
use Sk9\Todo\TaskCollection;

class TodoListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\Todo\TodoList');
    }

    function it_adds_a_task_to_the_list(TaskCollection $tasks, Task $task)
    {
        $tasks->add($task)->shouldBeCalledTimes(1);
        $this->tasks = $tasks;

        $this->addTask($task);
    }

    function it_checks_whether_it_has_any_tasks(TaskCollection $tasks)
    {
        $tasks->count()->willReturn(0);
        $this->tasks = $tasks;

        $this->hasTasks()->shouldBeFalse(false);

        $tasks->count()->willReturn(20);
        $this->tasks = $tasks;

        $this->hasTasks()->shouldBeTrue(true);
    }

    function getMatchers()
    {
        return [
            'beTrue' => function($subject) {
                    return $subject === true;
                },
            'beFalse' => function($subject) {
                    return $subject === false;
                },
        ];
    }
}
