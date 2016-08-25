<?php
class Gsm
{
	protected $model;
	protected $hasSimCard;
	protected $simMobileNumber;
	protected $outgoingCallsDuration;
	protected $lastIncomingCall;
	protected $lastOutgoingCall;
	
	public function __construct($model)
	{
		$this->model = $model;
	}
	//model
	public function getModel()
	{
		return $this->model;
	}	
	public function setModel($model)
	{
		$this->model = $model;
	}	
	//HasSimCard
	public function getHasSimCard()
	{
		return $this->hasSimCard;
	}
	public function setHasSimCard($hasSimCard)
	{
		$this->hasSimCard = $hasSimCard;
	}	
	//simMobileNumber
	public function getSimMobileNumber()
	{
		return $this->simMobileNumber;
	}
	public function setSimMobileNumber($simMobileNumber)
	{
		$this->simMobileNumber = $simMobileNumber;
	}
	//outgoing
	public function getOutgoingCallsDuration()
	{
		return $this->outgoingCallsDuration;
	}
	public function setOutgoingCallsDuration($outgoingCallsDuration)
	{
		$this->outgoingCallsDuration = $outgoingCallsDuration;
	}
	//lastIncoming
	public function getLastIncomingCall()
	{
		return $this->lastIncomingCall;
	}
	public function setLastIncomingCall($lastIncomingCall)
	{
		$this->lastIncomingCall = $lastIncomingCall;
	}
	//lastOutgoing
	public function getLastOutgoingCall()
	{
		return $this->lastOutgoingCall;
	}	
	public function setLastOutgoingCall($lastOutgoingCall)
	{
		$this->lastOutgoingCall = $lastOutgoingCall;
	}
	
	public function insertSimCard($simMobileNumber)
	{
		$pattern = '/(08(7|8|9){1}[2-9]{1}([0-9]{6}))/';
		if (preg_match($pattern, $simMobileNumber)) {
			$this->setSimMobileNumber($simMobileNumber);
			$this->setHasSimCard(true);
		}
	}
	
	public function removeSimCard()
	{
		$this->setHasSimCard(false);
	}
	
	public function getSumForCall() 
	{
		$sum = $value->getPriceForAMinute() * $this->getOutgoingCallsDuration();
		return $sum;
	}
	
	public function call(Gsm $receiver, $duration)
	{
		$call = new Call($this, $receiver, $duration);
		$this->setLastOutgoingCall($duration);
		
		$receiver->setLastIncomingCall($duration);
		$outCalls= $this->getOutgoingCallsDuration() + $this->getLastOutgoingCall();
		$this->setOutgoingCallsDuration($outCalls);
		
		echo $this->getModel().PHP_EOL;	
		echo "call to number: ".$receiver->getSimMobileNumber().PHP_EOL;
		echo "call duration: ". $this->getLastOutgoingCall().PHP_EOL;
		echo "sum for this outgoing call: ".$this->getSumForCall($call).PHP_EOL;
	}
}