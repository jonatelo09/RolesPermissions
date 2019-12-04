<div class="form-group">
	{{ Form::label('name_pri', 'Nombre del Departamento')}}
	{{ Form::text('name_pri',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('priorities.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>