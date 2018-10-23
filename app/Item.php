<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item', 'price', 'category_id', 'img'];

    protected $visible = ['item', 'price', 'img', 'id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function word()
    {
    	$word = explode(" ", $this->item);

    	return $word[0];
    }
}
