<?php

class Category extends BaseModel {


	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $primaryKey = 'category_id';

	/*
	 *	Category hasMany beers on Beer
	 */
	public function beers()
	{
		return $this->hasMany('Beer');
	}

}