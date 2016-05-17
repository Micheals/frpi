<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SelectorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->manufactures();
        $this->categories();
        $this->products();
        $this->tags();
        $this->attributes();
        $this->customerGroups();
        $this->productsReview();
        $this->productsReviewEdit();
        $this->transactionProducts();
        $this->transactionCart();
        $this->transactionCheckOut();
        $this->tagsListFooter();
        $this->categoriesPage();
        $this->categoriesParent();
        $this->productList();
        $this->createCollectionType();
        $this->createCollectionProduct();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     *
     */
    private function manufactures()
    {
        view()->composer('backend.pages.products.forms.links','App\Http\Selectors\Manufactures');
    }

    /**
     *
     */
    private function categories()
    {
        view()->composer('backend.pages.products.forms.links','App\Http\Selectors\Categories');
    }

    /**
     *
     */
    private function products()
    {
        view()->composer('backend.pages.products.forms.links','App\Http\Selectors\Products');
    }

    /**
     *
     */
    private function tags()
    {
        view()->composer('backend.pages.products.forms.general','App\Http\Selectors\Tags');
    }

    /**
     *
     */
    private function attributes()
    {
        view()->composer('backend.pages.products.forms.attribute','App\Http\Selectors\AttrGroups');
    }

    /**
     *
     */
    private function customerGroups()
    {
        view()->composer('backend.pages.products.forms.discount','App\Http\Selectors\CustomerGroups');
    }

    /**
     *
     */
    private function productsReview()
    {
        view()->composer('backend.pages.reviews.forms.form','App\Http\Selectors\Products@reviews');
    }

    /**
     *
     */
    private function productsReviewEdit()
    {
        view()->composer('backend.pages.reviews.forms.formEdit','App\Http\Selectors\Products@reviews');
    }

    /**
     *
     */
    private function transactionProducts()
    {
        view()->composer('frontend.templates.app','App\Http\Selectors\Transactions');
    }

    /**
     *
     */
    private function transactionCart()
    {
        view()->composer('frontend.pages.cart','App\Http\Selectors\Transactions@cart');
    }

    /**
     *
     */
    private function transactionCheckOut()
    {
        view()->composer('frontend.pages.checkout','App\Http\Selectors\Transactions@checkOut');
    }

    /**
     *
     */
    private function tagsListFooter()
    {
        view()->composer('frontend.templates.app','App\Http\Selectors\Tags@footer');
    }

    private function categoriesPage()
    {
        view()->composer('frontend.pages.category','App\Http\Selectors\Categories@index');
    }

    /**
     *
     */
    private function categoriesParent()
    {
        view()->composer('backend.pages.categories.forms.data','App\Http\Selectors\Categories');
    }

    /**
     *
     */
    private function productList()
    {
        view()->composer('backend.pages.inventories.forms._form','App\Http\Selectors\Products');
    }

    /**
     *
     */
    private function createCollectionType()
    {
        view()->composer('backend.pages.collections.forms._form','App\Http\Selectors\Types');
    }

    private function createCollectionProduct()
    {
        view()->composer('backend.pages.collections.forms._form','App\Http\Selectors\Products');
    }
}
