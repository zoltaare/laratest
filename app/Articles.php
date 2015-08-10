<?php namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
		'author'
	];

	//set published at as Carbon instance
	protected $dates = ['published_at'];

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now() );
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now() );
	}

	public function setPublishedAtAttribute($date)
	{
		// if current
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
		// if date is in the future
		// $this->attributes['published_at'] = Carbon::parse( $date );	
	}


}
