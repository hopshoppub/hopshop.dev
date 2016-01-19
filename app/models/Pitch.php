<?php

class Pitch extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	Pitch belongsTo a user on User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/*
	 *	Pitch hasMany contributions on Contribution
	 */
	public function contributions()
	{
		return $this->hasMany('Contribution');
	}

	/*
	 *	Pitch hasMany contributors Through Contribution on User
	 */
	public function contributors()
	{
		return $this->hasManyThrough('User','Contribution')
	}

	/*
	 *	Pitch belongsToMany watchers on User threw watches
	 */
	public function watchers()
	{
		return $this->belongsToMany('User', 'watches','pitch_id','user_id');
	}

	/*
	 *	Pitch hasMany updates on Update
	 */
	public function updates()
	{
		return $this->hasMany('Update');
	}
}