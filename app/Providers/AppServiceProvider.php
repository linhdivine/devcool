<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = Menu::where(['status'=>1,'parent'=>0])->orderBy('order', 'asc')->get();
        view()->share('menus',$menu);
    }
}
