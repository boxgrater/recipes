<div class="page-header">
  <h1>Ingredients</h1>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>recipe_id</th>
      <th>ingredient_id</th>
      <th>description</th>
      <th>modifier</th>
      <th>qty</th>
      <th>uom</th>
    </tr>
  </thead>
  <tbody>
    @foreach($recipes as $recipe)
    
      
      @foreach($recipe->ingredients as $ing)
      <tr>
          <td>{{ $recipe->id }}</td>
          <td></td>
          <td>{{ $ing['item'] }}</td>
          <td></td>
          <td>{{ $ing['qty'] }}</td>
          <td>{{ $ing['uom'] }}</td>
          </tr>
          @endforeach
        
      @endforeach
    </tbody>
  </table>
