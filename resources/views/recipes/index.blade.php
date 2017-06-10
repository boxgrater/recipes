<div class="page-header">
  <h1>Recipes</h1>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
        <th>Name</th>
        <th class="hidden-xs">Slug</th>
        <th>Type</th>
        <th class="hidden-xs">File</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($recipes as $recipe)
        <tr>
          
          <td>{{ $recipe->id }}</td>
          <td><a href="{{ route('recipes.show', ['id'=> $recipe->id]) }}">{{ $recipe->name }}</a></td>
          <td class="hidden-xs">{{ $recipe->slug }}</td>
          <td>{{ $recipe->type }}</td>
          <td class="hidden-xs">{{ $recipe->file }}</td>
          <td><a class="btn btn-primary btn-block" href="{{ route('recipes.show', ['id'=> $recipe->id]) }}"><span class="fa fa-eye"></span> View</a></td>
          <td><a class="btn btn-primary btn-block" href="{{ route('recipes.edit', ['id'=> $recipe->id]) }}"><span class="fa fa-pencil"></span> Edit</a></td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
