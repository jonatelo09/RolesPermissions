<div class="form-group">
	{{ Form::label('name_cli', 'Nombre del Departamento')}}
	{{ Form::text('name_cli',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('categories.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>