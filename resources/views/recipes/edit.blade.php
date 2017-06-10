<div class="page-header">
      <h1>
        Edit {{ ucwords($recipe->type) }}
        <div class="pull-right hidden-print">
          <a class="btn btn-primary" href="#"><span class="fa fa-pencil"></span> Export Config</a>
          <a class="btn btn-primary" href="#"><span class="fa fa-pencil"></span> Import Config</a>
        </div>
      </h1>
  </div>

@if ($recipe->type == 'batch')
  @include('recipes::partials.edit-batch', ['recipe'=>$recipe])
@elseif ($recipe->type == 'build')
  @include('recipes::partials.edit-build', ['recipe'=>$recipe])
@endif

@if ( $recipe->recipeIngredients )
  @foreach($recipe->recipeIngredients as $ing)
    @include('recipes::partials.edit-ingredients', ['ingredient' => $ing])
  @endforeach
@else
  <p>No Ingredients</p>
@endif