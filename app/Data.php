<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';

    protected $fillable = [
        'model','price',
        'tax_price','quantity',
        'minimum_quantity','seo_keyword',
        'date_available','weight',
        'status','product_id',
        'description','image'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dimension()
    {
        return $this->hasOne(Dimension::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function weight_class()
    {
        return $this->hasOne(WeightClass::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function length_class()
    {
        return $this->hasOne(LengthClass::class);
    }
}
