<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->mTask = new Task();
        $this->mTask->setTask("Coding");
        $this->mTask->setPriority(2);
        $this->mTask->setGroup(1);
        $this->mTask->setSize(1);
    }

    function testValidTask() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setTask("An extremely long name which is very lenghty for no reason expect to trigger this less than 64 characters limit we are trying to impose on each new task");
    }

    function testValidPriorityType() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setPriority("Huge");
    }

    function testValidPrioritySize() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setPriority(5);
    }

    function testValidSizeType() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setSize("A Million");
    }

    function testValidSizeSize() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setSize(5);
    }

    function testValidGroupType() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setGroup("A Million");
    }

    function testValidGroupSize() {
        $this->badTask = new Task();
        $this->expectException(Exception::class);
        $this->badTask->setGroup(6);
    }

    function testPriority() {
        $expected = 2;
        $this->assertEquals($expected, $this->mTask->getPriority());
    }

    function testGroup() {
        $expected = 1;
        $this->assertEquals($expected, $this->mTask->getGroup());
    }

    function testSize() {
        $expected = 1;
        $this->assertEquals($expected, $this->mTask->getGroup());
    }

}