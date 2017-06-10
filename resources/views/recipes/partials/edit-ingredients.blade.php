{{-- Form::model($ingredient, ['route'=> ['recipe-ingredients.update',$recipe->id], 'class'=>'form form-horizontal', 'method'=>'put']) --}}
<div class="col-sm-offset-2">
  {!! Form::open(['class'=>'form form-inline']) !!}
  <div class="form-group">
    {!! Form::text('description', $ingredient->description, ['class'=>'form-control']) !!}
  </div>
  
  <div class="form-group">
    {!! Form::text('modifier', $ingredient->modifier, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::text('qty', $ingredient->qty, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::text('uom', $ingredient->uom, ['class'=>'form-control']) !!}
  </div>

{!! Form::close() !!}
</div>
