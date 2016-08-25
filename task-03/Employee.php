<?php

class Employee
{
	protected $name;
	protected $currentTask;
	protected $hoursLeft;
	
	public function __construct($name)
	{
		if(is_string($name)) {
		$this->setName($name);
		}
	}
	
	public function getName() 
	{
		return $this->name;
	}

	public function setName($newName)
	{
		if (isset($newName)) {
			$this->name = $newName;
		}
	}
	
	public function getCurrentTask() 
	{
		return $this->currentTask;
	}
	
	public function setCurrentTask($currentTask)
	{
		$this->currentTask = $currentTask;
	}
	
	public function getHoursLeft() 
	{
		return $this->hoursLeft;
	}
	
	public function setHoursLeft($hoursLeft) 
	{
		if ($hoursLeft >= 0) {
			$this->hoursLeft = $hoursLeft;
		}
	}
	
	public function work() 
	{
		$result = $this->getHoursLeft() - ($this->getCurrentTask()->getWorkingHours());
		//var_dump($this->getCurrentTask()->getWorkingHours());
		if ($this->getHoursLeft() < ($this->getCurrentTask()->getWorkingHours())) {
				$this->getCurrentTask()->setWorkingHours(abs($result));
				$this->setHoursLeft(0);
			} else {	
				$this->getCurrentTask()->setWorkingHours(0);
				$this->setHoursLeft($result);
			}
	}
	
	public function showReport() {
		echo "Employee's name: ".$this->getName().PHP_EOL;
		echo "Task's name: ".$this->getCurrentTask()->getName().PHP_EOL;
		echo 'Working day - left hours:'.' '.$this->getHoursLeft().PHP_EOL;
		echo 'Current Task - left hours:'.' '.$this->getCurrentTask()->getWorkingHours().PHP_EOL;
		echo PHP_EOL;
	}
}