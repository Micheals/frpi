<?php

namespace App\Providers;


use App\Repo\Attributes\AttributeRepository;
use App\Repo\Categories\CategoryRepository;
use App\Repo\Categories\EloquentCategory;
use App\Repo\Codes\CodeRepository;
use App\Repo\Codes\EloquentCode;
use App\Repo\Collections\CollectionRepository;
use App\Repo\Collections\EloquentCollection;
use App\Repo\CustomerGroup\CustomerGroupRepository;
use App\Repo\CustomerGroup\EloquentCustomerGroup;
use App\Repo\Datas\DataRepository;
use App\Repo\Datas\EloquentData;
use App\Repo\Dimensions\DimensionRepository;
use App\Repo\Dimensions\EloquentDimension;
use App\Repo\Discounts\DiscountRepository;
use App\Repo\Discounts\EloquentDiscount;
use App\Repo\Images\EloquentImage;
use App\Repo\Images\ImageRepository;
use App\Repo\InItems\EloquentInItem;
use App\Repo\InItems\InItemRepository;
use App\Repo\Inventories\EloquentInventory;
use App\Repo\Inventories\InventoryRepository;
use App\Repo\LengthClasses\EloquentLengthClass;
use App\Repo\LengthClasses\LengthClassRepository;
use App\Repo\Manufactures\EloquentManufacture;
use App\Repo\Manufactures\ManufactureRepository;
use App\Repo\OutItems\EloquentOutItem;
use App\Repo\OutItems\OutItemRepository;
use App\Repo\Products\EloquentProduct;
use App\Repo\Products\ProductRepository;
use App\Repo\ProductStores\EloquentProductStore;
use App\Repo\ProductStores\ProductStoreRepository;
use App\Repo\Ratings\EloquentRate;
use App\Repo\Ratings\RateRepository;
use App\Repo\Reviews\EloquentReview;
use App\Repo\Reviews\ReviewRepository;
use App\Repo\Tags\EloquentTag;
use App\Repo\Tags\TagRepository;
use App\Repo\Transactions\EloquentTransaction;
use App\Repo\Transactions\TransactionRepository;
use App\Repo\WeightClasses\EloquentWeightClass;
use App\Repo\WeightClasses\WeightClassRepository;
use Illuminate\Support\ServiceProvider;
use App\Repo\AttrGroup\AttrGroupRepository;
use App\Repo\AttrGroup\EloquentAttrGroup;
use App\Repo\Attributes\EloquentAttribute;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AttrGroupRepository::class, EloquentAttrGroup::class);
        $this->app->singleton(AttributeRepository::class, EloquentAttribute::class);
        $this->app->singleton(CategoryRepository::class, EloquentCategory::class);
        $this->app->singleton(CodeRepository::class, EloquentCode::class);
        $this->app->singleton(CustomerGroupRepository::class, EloquentCustomerGroup::class);
        $this->app->singleton(DataRepository::class, EloquentData::class);
        $this->app->singleton(DimensionRepository::class, EloquentDimension::class);
        $this->app->singleton(DiscountRepository::class, EloquentDiscount::class);
        $this->app->singleton(ImageRepository::class, EloquentImage::class);
        $this->app->singleton(LengthClassRepository::class, EloquentLengthClass::class);
        $this->app->singleton(ManufactureRepository::class, EloquentManufacture::class);
        $this->app->singleton(ProductRepository::class, EloquentProduct::class);
        $this->app->singleton(ReviewRepository::class, EloquentReview::class);
        $this->app->singleton(TagRepository::class, EloquentTag::class);
        $this->app->singleton(WeightClassRepository::class, EloquentWeightClass::class);
        $this->app->singleton(TransactionRepository::class, EloquentTransaction::class);
        $this->app->singleton(ProductStoreRepository::class, EloquentProductStore::class);
        $this->app->singleton(RateRepository::class, EloquentRate::class);
        $this->app->singleton(InItemRepository::class, EloquentinItem::class);
        $this->app->singleton(InventoryRepository::class, EloquentInventory::class);
        $this->app->singleton(OutItemRepository::class, EloquentOutItem::class);
        $this->app->singleton(CollectionRepository::class, EloquentCollection::class);
    }
}
