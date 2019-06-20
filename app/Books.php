<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function author(){
        return $this->belongsTo('App\Author');
    }

    protected $fillable = [
        'name', 'description', 'photo', 'cost', 'category_id', 'discount', 'author_id', 'category_id', 'language_id', 'translator_id', 'published'
    ];
}
