<?php

namespace BoxGrater\Recipes\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
{
  protected $namespace = 'BoxGrater\Recipes\Controllers';
  protected $packageDir = __DIR__."/../../";

  public function boot()
  {
    $this->webRoutes();
    //$this->apiRoutes();
    $this->loadViewsFrom($this->packageDir.'resources/views', "bgrecipes");
  }

  public function register()
  {
    //
  }

  public function webRoutes()
  {
    Route::namespace($this->namespace)
           ->group($this->packageDir.'routes/web.php');
  }

  public function apiRoutes()
  {
    Route::namespace($this->namespace.'\Api')
           ->group($this->packageDir.'routes/api.php');
  }
}
