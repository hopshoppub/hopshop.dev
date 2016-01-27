<?php

class Pitch extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'user_id'		=> 'required|numeric',
		'brewery_id'	=> 'required|numeric',
		'title'			=> 'required|min:3|max:255',
		'campaign'		=> 'required',		
		'goal'			=> 'required|numeric',	
		'deadline'		=> 'required',
		'video'			=> 'required|min:0|max:200',
		'recipe'		=> 'required',			
	];

	// Don't forget to fill this array
	protected $fillable = [
		'pitch_id', 
		'user_id',
		'brewery_id', 
		'title', 
		'campaign', 
		'goal', 
		'deadline', 
		'video', 
		'recipe'
	];

	protected $primaryKey = 'pitch_id';

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
		return $this->hasManyThrough('User','Contribution');
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

    /*
     *  Pitch belongsTo brewery on Pitch
     */ 
    public function brewery()
    {
        return $this->belongsTo('Brewery');
    }

}