<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 2018-02-14
 * Time: 11:06 AM
 */

class Tasks extends CSV_Model {

    public function __construct()
    {
        parent::__construct(APPPATH . '../data/tasks.csv', 'id');
    }

}