<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['status','code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStore()
    {
        return $this->hasMany(ProductStore::class);
    }
}
