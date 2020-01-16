<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    Protected $fillable=['title','excerpt','body','photo'];
}
