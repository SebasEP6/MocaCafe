<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['album_id', 'caption', 'img'];
    protected $visible = ['caption', 'img', 'id'];

    public function album()
    {
    	return $this->belongsTo('App\Album');
    }
}
