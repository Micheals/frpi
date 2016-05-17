<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttrGroup extends Model
{
    protected $table = 'attr_groups';

    protected $fillable = ['label','sort_order'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }
}
