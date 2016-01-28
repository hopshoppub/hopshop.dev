<?php

class Configuration extends BaseModel {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	// Add your validation rules here
	protected $table = 'config';
	/*
	 *	Category hasMany beers on Beer
	 */
}