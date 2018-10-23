<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['album'];

    protected $visible = ['album'];

    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }

    public function setAlbumAttribute($value)
    {
    	$this->attributes['album'] = strtoupper($value);
    }
}
