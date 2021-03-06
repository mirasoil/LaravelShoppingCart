<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['id','name', 'code', 'image', 'price', 'description'];
}
