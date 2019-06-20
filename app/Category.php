<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';

    public function books()
    {
        return $this->hasMany('App\Books');
    }

    protected $fillable = ['name'];


}
