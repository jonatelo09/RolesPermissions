<div class="form-group">
	{{ Form::label('name_pro', 'Nombre del Problema')}}
	{{ Form::text('name_pro',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripcion del Problema')}}
	{{ Form::text('description',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('problems.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>