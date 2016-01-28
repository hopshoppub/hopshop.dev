<?php

class Rating extends BaseModel {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $primaryKey = 'rating_id';
	// Don't forget to fill this array
	protected $fillable = array('user_id', 'beer_id', 'rating', 'comment');

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