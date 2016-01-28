<?php

class Watch extends BaseModel {
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	/*
	 *	Watch belongsTo a user on User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/*
	 *	Watch belongsTo a pitch on Pitch
	 */
	public function pitch()
	{
		return $this->belongsTo('Pitch');
	}
}