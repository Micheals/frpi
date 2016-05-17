<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesSeeds extends Seeder
{
    /**
     * CategoriesSeeds constructor.
     */
    public function __construct()
    {
        $attribute = [
            'name'=>'Face Cleanser',
            'sort_order'=>0,
            'status'=>0,
        ];
        $attribute1 = [
            'name'=>'Gifts & Value Sets',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute2 = [
            'name'=>'Moisturizers and Cream',
            'sort_order'=>0,
            'status'=>0
        ];
        $none = [
            'name'=>'NONE',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute3 = [
            'name'=>'Scar Cream',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute4 = [
            'name'=>'Sunscreen and Aftersun',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute5 = [
            'name'=>'Toner & Mists',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute6 = [
            'name'=>'Face Treatments & Serums',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute7 = [
            'name'=>'Neck & Decollete',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute8 = [
            'name'=>'Eye Cream',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute9 = [
            'name'=>'Dermacare',
            'sort_order'=>2,
            'status'=>0
        ];
        $attribute10 = [
            'name'=>'Whitening Products',
            'sort_order'=>0,
            'status'=>0
        ];
//        body & Bath
        $attribute11 = [
            'name'=>'Body Lotion & Butter',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute12 = [
            'name'=>'Body Scrubs',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute13 = [
            'name'=>'Body Soaps & Shower Gels',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute14 = [
            'name'=>'Body Massage Oil',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute15 = [
            'name'=>'Hair Removal',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute16 = [
            'name'=>'Bath & Body Accessories',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute17 = [
            'name'=>'Gifts & Value Sets',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute18 = [
            'name'=>'Breast Care',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute19 = [
            'name'=>'Sun Protection',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute20 = [
            'name'=>'Hand & Foot Care',
            'sort_order'=>0,
            'status'=>0
        ];


        $attribute21 = [
            'name'=>'Sunscreen & After Sun',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute22 = [
            'name'=>'Tanning Oil',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute23 = [
            'name'=>'Self Tanner',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute24 = [
            'name'=>'Shampoos & Conditioners',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute25 = [
            'name'=>'Hair Oils',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute26 = [
            'name'=>'Hair Coloring',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute27 = [
            'name'=>'Hair Care Sets',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute28 = [
            'name'=>'Hair Styling',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute29 = [
            'name'=>'Hair Treatments',
            'sort_order'=>0,
            'status'=>0
        ];
        $attribute30 = [
            'name'=>'Hair Care Accessories',
            'sort_order'=>0,
            'status'=>0
        ];
        Category::create($attribute);
        Category::create($attribute1);
        Category::create($attribute2);
        Category::create($none);
        Category::create($attribute3);
        Category::create($attribute4);
        Category::create($attribute5);
        Category::create($attribute6);
        Category::create($attribute7);
        Category::create($attribute8);
        $id_9 =Category::create($attribute9);
        Category::create($attribute10);
        Category::create($attribute11);
        Category::create($attribute12);
        Category::create($attribute13);
        Category::create($attribute14);
        Category::create($attribute15);
        Category::create($attribute16);
        Category::create($attribute17);
        Category::create($attribute18);
        $id_19 = Category::create($attribute19);
        Category::create($attribute24);
        Category::create($attribute25);
        Category::create($attribute26);
        Category::create($attribute27);
        Category::create($attribute28);
        Category::create($attribute29);
        Category::create($attribute30);
        Category::create($attribute1)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute2)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute3)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute4)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute5)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute6)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute7)->parentCategory()->sync([$id_9->id]);
        Category::create($attribute20)->parentCategory()->sync([$id_19->id]);
        Category::create($attribute21)->parentCategory()->sync([$id_19->id]);
        Category::create($attribute22)->parentCategory()->sync([$id_19->id]);
        Category::create($attribute23)->parentCategory()->sync([$id_19->id]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
