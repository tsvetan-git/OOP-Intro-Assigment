<?php
require_once 'autoload.php';

$employee = new Employee('ivan');
$task = new Task('presentation', 2);
$employee->setCurrentTask($task);
$employee->setHoursLeft(8);
$employee->work();
$employee->showReport();

$employee = new Employee('pesho');
$task = new Task('project', 22);
$employee->setCurrentTask($task);
$employee->setHoursLeft(8);
$employee->work();
$employee->showReport();
?>
