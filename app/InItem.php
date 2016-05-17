<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InItem extends Model
{
    protected $table = 'in_items';

    protected $fillable = ['product_id','quantity'];
}
