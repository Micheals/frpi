<?php

use Illuminate\Database\Seeder;
use App\AttrGroup;
class AttributeGroupsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attribute = [
            'label'=>'SKU',
            'sort_order'=>1
        ];
        $attribute1 = [
            'label'=>'Product Warranty',
            'sort_order'=>1
        ];
        $attribute2 = [
            'label'=>'Color',
            'sort_order'=>1
        ];
        $attribute3 = [
            'label'=>'Model',
            'sort_order'=>1
        ];
        AttrGroup::create($attribute);
        AttrGroup::create($attribute1);
        AttrGroup::create($attribute2);
        AttrGroup::create($attribute3);
    }
}
