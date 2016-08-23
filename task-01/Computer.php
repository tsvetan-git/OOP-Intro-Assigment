<?php
class Computer
{
	protected $year;
	protected $price;
	protected $isNotebook;
	protected $hardDiskMemory;
	protected $freeMemory;
	protected $operationSystem;
	
	public function __constructor($year, $price, $isNotebook,$hardDiskMemory,$freeMemory,$operationSystem)
	{
		$this->year = $year;
		$this->price = $price;
		$this->isNotebook = false;
		$this->hardDiskMemory = $hardDiskMemory;
		$this->freeMemory = $freeMemory;
		$this->operationSystem = $operationSystem;
	}
	
	
	//year
	public function getYear()
	{
		return $this->year;
	}
	public function setYear($value)
	{
		return $this->price = $year;
	}
	
	//price
	public function getPrice()
	{
		return $this->price;
	}
	public function setPrice($value)
	{
		return $this->price = $value;
	}
	
	//notebook
	public function getIsNotebook()
	{
		$this->isNotebook;
	}
	public function setIsNotebook($value)
	{
		$this->isNotebook = (bool)$value;
	}
	
	//hardDiskMemory
	public function getHardDiskMemory()
	{
		$this->hardDiskMemory;
	}
	public function setHardDiskMemory($value)
	{
		$this->hardDiskMemory = $value;
	}
	//freeMemory
	public function getFreeMemory()
	{
		$this->freeMemory;
	}
	public function setFreekMemory($value)
	{
		$this->FreeMemory = $value;
	}
	//
	public function getOperationSystem()
	{
		$this->operationSystem;
	}
	public function setOperationSystem($value)
	{
		$this->operationSystem= $value;
	}
	
	protected function useMemory()
	{
	
	}
	
	public function changeOperationSystem()
	{
		
	}
	
	public function getInfo()
	{
		return sprintf('PC year:%s price:%s notebook:%s hddMemory:%s freeMemory:%s OS:%s',
				$this->getYear(),
				$this->getPrice(),
				$this->getIsNotebook(),
				$this->getHardDiskMemory(),
				$this->getFreeMemory(),
				$this->getOperationSystem()
				);
	}

}