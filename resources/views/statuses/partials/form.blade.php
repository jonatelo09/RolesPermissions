<div class="form-group">
	{{ Form::label('name_sta', 'Nombre del Departamento')}}
	{{ Form::text('name_sta',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('statuses.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>