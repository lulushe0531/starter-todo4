<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 2018-03-09
 * Time: 11:00 PM
 */

class Task extends Entity
{
    protected $id;
    protected $task;
    protected $priority;
    protected $size;
    protected $group;

    public function getId(){
        return $this->id;
    }

    public function getTask(){
        return $this->task;
    }

    public function getPriority(){
        return $this->priority;
    }

    public function getGroup() {
        return $this->group;
    }

    public function getSize() {
        return $this->size;
    }

    // insist that an ID be present
    public function setId($value) {
        if (empty($value))
            throw new Exception('ID must exist');
        $this->id = $value;
        return $this;
    }

    // insist that a task be present and no longer than 64 characters
    public function setTask($value) {
        if (empty($value)) {
            throw new Exception("Task Name can't be empty");
        }
        if (strlen($value) >= 65)
        {
            throw new Exception("Task name has maximum 64 characters.");
        }
        if (!preg_match('/^[a-z0-9\s]*$/i', $value))
        {
            throw new Exception("Task name can only contain alphanumeric,numeric and spaces.");
        }
        $this->task = $value;
        return $this;
    }

    public function setPriority($value) {
        if (!is_int($value)) {
            throw new Exception("Priority must be a number");
        }
        if ($value < 1 || $value > 4) {
            throw new Exception("Priority must between 1 and 4");
        }
        $this->priority = $value;
        return $this;
    }

    public function setSize($value) {
        if (!is_int($value)) {
            throw new Exception("Size must be a number");
        }
        if ($value < 1 || $value > 4) {
            throw new Exception("Size must between 1 and 4");
        }
        $this->size = $value;
        return $this;
    }

    public function setGroup($value) {
        if (!is_int($value)) {
            throw new Exception("Group must be a number");
        }
        if ($value < 1 || $value > 5) {
            throw new Exception("Group must between 1 and 5");
        }
        $this->group = $value;
        return $this;
    }
}