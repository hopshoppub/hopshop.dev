<?php

class Rating extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	Rating belongsTo a user on User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/*
	 *	Rating belongsTo a beer on Beer
	 */
	public function beer()
	{
		return $this->belongsTo('Beer');
	}
}