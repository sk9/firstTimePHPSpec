<?php

namespace spec\Sk9\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sk9\Todo\Task;


class TaskCollectionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Sk9\Todo\TaskCollection');
    }

    public function it_adds_a_task_to_the_collection(Task $task, Task $anotherTask){

        $this->add($task);
        $this->tasks[0]->shouldBe($task);

        $this->add($anotherTask);
        $this->tasks[1]->shouldBe($anotherTask);
    }

    public function it_is_countable(){
        $this->shouldImplement('Countable');
    }


//    public function it_counts_elements_of_the_collections()
//    {
//        $this->count()->shouldReturn(0);
//
//        $this->tasks = ['foo'];
//        $this->count()->shouldReturn(1);
//    }
}
