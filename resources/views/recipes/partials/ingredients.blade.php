@if(isset($ingredients) and ! empty($ingredients))
<h2>Ingredients</h2>
<table class="table table-condensed">
  <thead>
    <tr>
      <th>Qty</th>
      <th>Unit</th>
      <th>Ingredient</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ingredients as $ing)
    <tr>
      <td>{{ $ing['qty'] }}</td>
      <td>{{ $ing['uom'] }}</td>
      <td>{{ $ing->ingredient->name }}

          @if($ing->modifier != null )
          <em>&nbsp;{{  "[ ".$ing->modifier." ]" }}</em>
          @endif
      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
