<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutItem extends Model
{
    protected $table = 'out_items';
    protected $fillable = ['product_id','quantity'];
}
