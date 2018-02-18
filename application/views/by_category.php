<?php
/**
 * Created by PhpStorm.
 * User: Wei
 * Date: 2/14/2018
 * Time: 11:25 AM
 */?>
<h3>Tasks by Category</h3>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Task</th>
        <th>Category</th>
    </tr>
    {display_tasks}
    <tr>
        <td>{id}</td>
        <td>{task}</td>
        <td>{group}</td>
    </tr>
    {/display_tasks}
</table>