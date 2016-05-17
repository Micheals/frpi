<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attribute = [
            'label'=>'Health & Beauty'
        ];
        $attribut1 = [
            'label'=>'Skin Care'
        ];
        $attribut2 = [
            'label'=>'Hair Care'
        ];
        $attribute3 = [
            'label'=>'Bath & Body'
        ];
        Tag::create($attribute);
        Tag::create($attribut1);
        Tag::create($attribut2);
        Tag::create($attribute3);
    }
}
