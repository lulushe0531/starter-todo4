<?php
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->mTasks = new Tasks();
        //$this->mTasks->getCategorizedTasks();
    }

    function testTaskStatusCounts(){
        $this->compCount = $this->mTasks->getCompletedCount();
        $this->incompCount = $this->mTasks->getIncompleteCount();
        $this->assertNotFalse(($this->incompCount > $this->compCount), "The amount of incomplete jobs (" . $this->incompCount
            . ") is not greater than the amount of complete jobs (" . $this->compCount . ")");
    }
}