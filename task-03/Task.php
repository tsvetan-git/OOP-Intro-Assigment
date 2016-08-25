<?php
class Task
{
	protected $name;
	protected $workingHours;
	
	public function __construct($name, $workingHours)
	{
		if(is_string($name)) {
		$this->setName($name);
		}
		//else error
		if(is_int($workingHours)){
			$this->setWorkingHours($workingHours);
		}
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name) 
	{
		$this->name = $name;
	}
	
	public function getWorkingHours()
	{
		return $this->workingHours;
	}
	
	public function setWorkingHours($workingHours)
	{
		$this->workingHours = $workingHours;
	}
	
	public function getInfo()
	{
		return sprintf('task:%s hours:%d', $this->getName(), $this->getWorkingHours());
	}
}