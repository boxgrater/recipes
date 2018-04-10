<?php

namespace BoxGrater\Recipes\Controllers;

use BoxGrater\Gooey\Controllers\Controller;

class RecipeController extends Controller
{
  public function index()
  {
    return view('bgrecipes::browse');
  }
}
