<?php namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
		'author',
		'user_id'
	];

	//set published at as Carbon instance
	protected $dates = ['published_at'];

	// query scope
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now() );
	}

	// query scope
	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now() );
	}

	// mutator
	public function setPublishedAtAttribute($date)
	{
		// if current
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
		// if date is in the future
		// $this->attributes['published_at'] = Carbon::parse( $date );	
	}


	/*
	 article has one user (Many - 1)
	*/
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
