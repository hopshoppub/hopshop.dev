<?php
use Carbon\Carbon;

class BaseModel extends Eloquent
{

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	
	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}


	// public function getFullNameAttribute()
	// {
	// 	return $this->first_name . ' ' . $this->last_name;
	// }

	// public function setTitleAttribute($value)
	// {
	// 	$this->attritubes['title'] = $value;
	// 	$this->attributes['slug'] = Str::slug($value);
	// }

}