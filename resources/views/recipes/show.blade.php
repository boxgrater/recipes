<div class="recipe {{ $recipe->type }}-recipe">

  <div class="page-header">
    <h1>
      {{ $recipe['name'] }}
      <div class="hidden-print pull-right">
        <a class="btn btn-primary" href="{{ route('recipes.edit', ['id'=> $recipe->id]) }}"><span class="fa fa-pencil"></span> Edit</a>
      </div>
    </h1>
  </div>

  
  @include('recipes::partials.ingredients', ['ingredients' => $recipe->recipeIngredients])
  @include('recipes::partials.procedures', ['procedures' => $recipe->procedures])
  @include('recipes::partials.quality', ['quality'=> $recipe->quality])

</div>