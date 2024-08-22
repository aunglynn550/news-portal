<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Paginator::useBootstrap();
     
        // $path = resource_path('views\admin\layouts_copy');
        // $files = glob($path.'/*');       
        // foreach($files as $file){
        //     unlink($file);
        //     }
        
    }
}
