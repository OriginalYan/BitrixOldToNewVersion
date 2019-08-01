<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components/bitrix/tasks.task.list/class.php';

class TasksTaskListComponentDevino extends TasksTaskListComponent{
    protected $pageSizes = array(
        array("NAME" => "50", "VALUE" => "50"),
        array("NAME" => "100", "VALUE" => "100"),
        array("NAME" => "300", "VALUE" => "300"),
        array("NAME" => "500", "VALUE" => "500"),
        array("NAME" => "1000", "VALUE" => "1000" )
    );
}