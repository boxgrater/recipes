<?php

namespace BoxGrater\Recipes\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class RecipesFacade extends Facade
{
  public static function getFacadeAccessor()
  {
    return 'recipes';
  }
}
