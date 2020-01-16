<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['cat_id','name','description','detail','qty','photo','price','status'];

}
