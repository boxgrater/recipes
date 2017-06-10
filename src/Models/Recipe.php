<?php

namespace BoxGrater\Recipes\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $table = "recipes";

  protected $fillable = [
    'name','slug','meta','ingredients','procedures','quality'
  ];

  protected $casts = [
    'meta'        => 'array',
    'ingredients' => 'array',
    'procedures'  => 'array',
    'quality'     => 'array'
  ];

  public function uoms()
  {
    $array = [
      'oz' => 'oz',
      'ozm' => 'ozm',
      'lb' => 'lb',
      'lbm' => 'lbm',
      'qt' => 'qt',
      'qts' => 'qts',
      'gal' => 'gal',
      'gals' => 'gals',
      'cup' => 'cup',
      'cups' => 'cups'
    ];
    return $array;
  }


  public function getCategoryAttribute()
  {
    $type = $this->type;

    $cat = "";  
    $meta = $this->meta;

    if($type == 'batch') {
      if(array_key_exists('category', $meta)) {
        $cat = $meta['category'];
      }
    } elseif ($type == 'build') {
      if(array_key_exists('menu_type', $meta)) {
        $cat = $meta['menu_type'];
      }
    }
    
    
    return $cat;
  }

  public function recipeIngredients()
  {
    return $this->hasMany('BoxGrater\Ingredients\Models\RecipeIngredient');

  }
}
