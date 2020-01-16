<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable=['pro_id','o_id','qty','sub_total'];
    
}
