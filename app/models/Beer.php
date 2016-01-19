<?php

class Beer extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	/*
	 *	Beer belongsTo a brewery on Brewery
	 */
	public function brewery()
	{
		return $this->belongsTo('Brewery');
	}

	/*
	 *	Beer belongsTo a category on Category
	 */
	public function category()
	{
		return $this->belongsTo('Category');
	}

	/*
	 *	Beer belongsTo a style on Style
	 */
	public function style()
	{
		return $this->belongsTo('Style');
	}

	/*
	 *	Beer hasMany ratings on Rating
	 */
	public function ratings()
	{
		return $this->hasMany('Rating');
	}

	/*
	 *	Beer hasMany users Through Rating
	 */
	public function users()
	{
		return $this->hasManyThrough('User', 'Rating');
	}
}