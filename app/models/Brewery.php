<?php

class Brewery extends BaseModel {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $primaryKey = 'brewery_id';

	/*
	 *	brewery hasMany beers on Beer
	 */
	public function beers()
	{
		return $this->hasMany('Beer');
	}

	/*
	 *	berwery belongsTo a location on Location
	 */
	public function location()
	{
		return $this->belongsTo('Location');
	}
}