<?php

class Computer
{
	protected $year;
	protected $price;
	protected $isNotebook;
	protected $hddMemory;
	protected $freeMemory;
	protected $os;
	
	public function __construct($year, $price, $isNotebook, $hddMemory, $freeMemory, $os)
	{
		$this->year = $year;
		$this->price = $price;
		$this->isNotebook = false;
		$this->hddMemory = $hddMemory;
		$this->freeMemory = $freeMemory;
		$this->os = $os;
	}
	
	//year
	public function getYear()
	{
		return $this->year;
	}
	public function setYear($year)
	{
		$this->year = $year;
	}
	//price
	public function getPrice()
	{
		return $this->price;
	}
	public function setPrice($price)
	{
		$this->price = $price;
	}	
	//notebook
	public function getIsNotebook()
	{
		return $this->isNotebook;
	}
	public function setIsNotebook($isNotebook)
	{
		$this->isNotebook = $isNotebook;
	}	
	//hardDiskMemory
	public function getHddMemory()
	{
		return $this->hddMemory;
	}
	public function setHddMemory($hddMemory)
	{
		$this->hddMemory = $hddMemory;
	}	
	//freeMemory
	public function getFreeMemory()
	{
		return $this->freeMemory;
	}
	public function setFreeMemory($freeMemory)
	{
		$this->freeMemory = $freeMemory;
	}
	//OS
	public function getOs()
	{
		return $this->os;
	}
	public function setOs($os)
	{
		return $this->os = $os;
	}
	
	public function useMemory($memory)
	{
		if ($this->freeMemory > $memory) {
			return "enough memory to install new os";
		}else {
			return "not enough memory";
		}
	}
	
	public function changeOS($newOs) 
	{
		if ($newOs == $this->os) {
            return "process to reinstall your os: $this->os";
        } else {
            return @"your os is changed to: $this->setOs($newOs)";
        }
    }
	
	public function getInfo()
	{
		return sprintf('year:%d price:%d', $this->getYear(), $this->getPrice());
	}
}