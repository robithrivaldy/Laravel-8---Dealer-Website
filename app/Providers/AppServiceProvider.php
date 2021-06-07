<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\M_Dealer;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = M_Dealer::findorFail(1);
        view()->share('webname', $data->name);
        view()->share('webabout', $data->about);
        view()->share('webemail', $data->email);
        view()->share('webphonenumber', $data->phonenumber);
        view()->share('webaddress', $data->address);
        view()->share('webimage', $data->image);
        view()->share('webgooglemaps', $data->googlemaps);
    }
}
