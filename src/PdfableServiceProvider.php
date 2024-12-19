<?php

namespace AscentCreative\Pdfable;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\Router;

class PdfableServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
   
    $this->mergeConfigFrom(
        __DIR__.'/../config/pdfable.php', 'pdfable'
    );

  }

  public function boot()
  {

//     $this->loadViewsFrom(__DIR__.'/../resources/views', 'pdfable');

//     $this->loadRoutesFrom(__DIR__.'/../routes/pdfable-web.php');

//     $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    
  }

  

  // register the components
  public function bootComponents() {

  }




  

    public function bootPublishes() {
// 
//       $this->publishes([
//         __DIR__.'/../assets' => public_path('vendor/ascent/pdfable'),
//     
//       ], 'public');

      $this->publishes([
        __DIR__.'/../config/pdfable.php' => config_path('pdfable.php'),
      ]);

    }



}