<?php

class Contribution extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	Contribution belongsTo a user on User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/*
	 *	Contribution belongsTo a pitch on Pitch
	 */
	public function pitch()
	{
		return $this->belongsTo('Pitch');
	}

}