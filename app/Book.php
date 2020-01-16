<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    Protected $fillable=['cus_id','salon','service','time','note'];
}
