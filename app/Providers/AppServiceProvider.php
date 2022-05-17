<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('globalData', (object)[
            'mainMenu'=>[
                (object)['name' => 'Home', 'route' => 'home'],
                (object)['name' => 'About Us', 'route' => 'about'],
                (object)['name' => 'Contact Us', 'route' => 'contact'],
                // (object)['name' => 'News', 'route' => 'blog'],
            ],
            'members' => [
                ['name'=>'Dr. Odhiambo Bati','description'=>'Doctor', 'image'=>'images/team/Dr_Odhiambo_Bati.png'],
                ['name'=>'Pricilla Okindo','description'=>'Environmentalist', 'image'=>'images/team/Priscilla_Okindo.png'],
                ['name'=>'Ronnie Midigo','description'=>'Health Researcher', 'image'=>'images/team/Ronnie_Midigo.png'],
                ['name'=>'Wilson Mosbey','description'=>'Medical Social Worker', 'image'=>'images/team/wilson_mosbey.png'],
            ]
        ]);

    }
}
