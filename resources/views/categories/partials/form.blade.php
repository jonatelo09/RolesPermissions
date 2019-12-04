<div class="form-group">
	{{ Form::label('name_cat', 'Nombre de laCategoria')}}
	{{ Form::text('name_cat',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('categories.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>