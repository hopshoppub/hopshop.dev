<?php

class Update extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];
	protected $primaryKey = 'update_id';

	/*
	 *	Updates belongsTo a pitch on Pitch
	 */
	public function pitch()
	{
		return $this->belongsTo('Pitch');
	}

}