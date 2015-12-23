<?php

class PhoneType extends \Eloquent {

	protected $table = 'phoneTypes';

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name'];

}