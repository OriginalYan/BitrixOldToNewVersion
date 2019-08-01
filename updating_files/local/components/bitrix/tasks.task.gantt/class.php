<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components/bitrix/tasks.task.gantt/class.php';

class TasksTaskGanttComponentDevino extends TasksTaskGanttComponent{
    protected function getPageSize()
    {
        return 1000;
    }
}