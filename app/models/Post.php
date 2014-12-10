<?php

class Post extends Eloquent {

	protected $table = 'post';

	public static $rules = array(
    'title'=>'required',
    'content'=>'required',
  );

	//http://stackoverflow.com/questions/24441395/how-to-change-default-format-at-created-at-and-updated-at-value-laravel
  public function getCreatedAtAttribute($date)
	{
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d M Y');
	}

	public function getUpdatedAtAttribute($date)
	{
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
	}

	public static function bare () {
		$columns = Schema::getColumnListing('post');
		$data = new stdClass();
		foreach($columns as $c) {
			$data->$c = '';
		}
		return $data;
	}
}
