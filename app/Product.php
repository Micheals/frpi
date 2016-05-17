<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name','description',
        'meta_tag_title','meta_tag_description',
        'meta_tag_keywords'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(Data::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function code()
    {
        return $this->hasOne(Code::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dimension()
    {
        return $this->hasOne(Dimension::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function manufacturers()
    {
        return $this->belongsToMany(Manufacture::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function relatedProducts()
    {
        return $this->belongsToMany('App\Product','products_products','product_id1','product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStore()
    {
        return $this->hasMany(ProductStore::class);
    }

    /**
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }

    /**
     * @return mixed
     */
    public function getManufactureListAttribute()
    {
        return $this->manufacturers->lists('id')->all();
    }

    /**
     * @return mixed
     */
    public function getCategoryListAttribute()
    {
        return $this->categories->lists('id')->all();
    }

    /**
     * @return mixed
     */
    public function getProductListAttribute()
    {
        return $this->relatedProducts->lists('id')->all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * item instock
     */
    public function in()
    {
        return $this->hasOne(InItem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * item sold out
     */
    public function out()
    {
        return $this->hasOne(OutItem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }
}
