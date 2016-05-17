<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->attrGroups();
        $this->collections();
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
    private function attrGroups()
    {
        view()->composer('backend.pages.attributes-group.index','App\Http\Tables\AttrGroups');
    }

    /**
     *
     */
    private function collections()
    {
        view()->composer('backend.pages.collections.index','App\Http\Tables\Collections');
    }
}
