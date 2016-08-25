<?php
class Call
{
    protected $priceForAMinute;
    protected $caller;
    protected $receiver;
    protected $duration;
    
    public function __construct($caller, $receiver, $duration)
    {
    	$this->caller = $caller;
    	$this->receiver = $receiver;
    	$this->duration = $duration;
    }
    
    public function getPriceForAMinute()
    {
    	return $this->priceForAMinute;
    }
    
    public function setPriceForAMinute($setPriceForAMinute)
    {
    	return $this->priceForAMinute = $setPriceForAMinute;
    }
    
    public function getCaller()
    {
    	return $this->caller;
    }
    
    public function setCaller($caller)
    {
    	return $this->caller = $caller;
    }
    
    public function getReceiver() 
    {
    	return $this->receiver;
    }
    
    public function setReceiver($receiver)
    {
    	return $this->receiver = $receiver;
    }
    
    public function getDuration() 
    {
    	return $this->duration;
    }
    
    public function setDuration($duration) 
    {
    	if ($duration > 0 && $duration < 120){
    		return $this->duration = $duration;
    	}//else error
    }
}