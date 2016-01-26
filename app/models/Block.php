<?php

class Block extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	block belongsTo a location on Location
	 */
	public function location()
	{
		return $this->blongsTo('Location');
	}

}