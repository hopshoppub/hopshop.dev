<?php

class Location extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	Location hasMany blocks on Block
	 */
	public function blocks()
	{
		return $this->hasMany('Block');
	}

	/*
	 *	Location hasMany users on User
	 */
	public function users()
	{
		return $this->hasMany('User');
	}

	/*
	 *	Location hasMany breweries on Brewery
	 */
	public function breweries()
	{
		return $this->hasMany('Brewery');
	}
}