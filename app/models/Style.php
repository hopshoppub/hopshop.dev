<?php

class Style extends BaseModel {
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $primaryKey = 'style_id';

	/*
	 *	Style hasMany beers on Beer
	 */
	public function beers()
	{
		return $this->hasMany('Beer');
	}
}