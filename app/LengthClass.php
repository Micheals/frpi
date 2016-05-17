<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LengthClass extends Model
{
    protected $table = 'length_classes';

    protected $fillable = ['label','data_id'];
}
