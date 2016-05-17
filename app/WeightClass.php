<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeightClass extends Model
{
    protected $table = 'weight_classes';

    protected $fillable = ['label','data_id'];
}
