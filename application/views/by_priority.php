<?php
/**
 * Created by PhpStorm.
 * User: Wei
 * Date: 2/14/2018
 * Time: 11:25 AM
 */?>
<h3>Tasks by Priority</h3>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Task</th>
        <th>Priority</th>
    </tr>
    {display_tasks}
    <tr>
        <td>{id}</td>
        <td>{task}</td>
        <td>{priority}</td>
    </tr>
    {/display_tasks}
</table>