<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $primaryKey = 'user_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/*
	 *	Validations Rules
	 */
	public static $rules = array(

		'email'			=>  'required|min:3|max:250|unique',
		'user_name'		=>	'required|min:3|max:150|unique',
		'password'		=>	'required|min:20|max:255',
		'first_name'	=>	'required|min:1|max:50',
		'last_name'	    =>	'required|min:1|max:50',
		'zip_code'	    =>	'min:6|max:10'
	);


	/*
	 *	User hasMany pitches on Pitch
	 */
	public function pitches()
	{
		return $this->hasMany('Pitch');
	}

	/*
	 *	User hasMany ratings on Rating
	 */
	public function ratings()
	{
		return $this->hasMany('Rating');
	}

	/*
	 *	User belongsTo a location on Location
	 */
	public function location()
	{
		return $this->belongsTo('Location');
	}

	/*
	 *	User belongsToMany watching on Pitch through watches
	 */
	public function watching()
	{
		return $this->belongsToMany('Pitch', 'watches', 'user_id', 'pitch_id');
	}

	/*
	 *	User hasMany contributing Through Contributions on Pitch
	 */
	public function contributing()
	{
		return $this->hasManyThrough('Pitch', 'Contribution');
	}

	/*
	 *	User belongsToMany contributions on Contribution
	 */
	public function contributions()
	{
		return $this->belongsToMany('Contribution');
	}

	/* 
	 *	Users hasMany rated on Beer Through Rating
	 */
	public function rated()
	{
		return $this->hasManyThrough('Beer', 'Rating');
	}
}