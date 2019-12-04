<div class="form-group">
	{{ Form::label('name_tur', 'Nombre del Departamento')}}
	{{ Form::text('name_tur',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('turns.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>