<?php

class SuperTopic extends Topic
{
	protected $table='topics';
	public function getTitleAttribute($value)
	{
		if($this->visits > 10)
		{
			return strtoupper($value);
		}
		return $value;
	}	
}
