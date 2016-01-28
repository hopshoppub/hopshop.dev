<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
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

		'email'			=>  'required|min:3|max:250|unique:users',
		'user_name'		=>	'min:3|max:150|unique:users',
		'password'		=>	'required',
		'first_name'	=>	'min:1|max:50',
		'last_name'	    =>	'min:1|max:50',
		'zip_code'	    =>	'max:10'
	);

	// Don't forget to fill this array
	protected $fillable = [
		'email',
		'user_name',
		'password',
		'first_name',
		'last_name',
		'zip_code'	  
	];


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