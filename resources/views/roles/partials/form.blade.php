<div class="form-group">
	{{ Form::label('name', 'Nombre del role')}}
	{{ Form::text('name',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL amigable')}}
	{{ Form::text('slug',null,['class' => 'form-control'])}}
</div>

<div class="form-group">
	{{ Form::label('description', 'Description del role')}}
	{{ Form::textarea('description',null,['class' => 'form-control'])}}
</div>
<hr>
<h4>Acceso Especial</h4>
<div class="form-group">
	<label>{{ Form::radio('special', 'all-access')}} Acceso Total</label>
	<label>{{ Form::radio('special', 'no-access')}} Ningún Acceso</label>
</div>
<hr>
<div class="form-group">
	<h4>Lista de Permisos</h4>
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
			<li>
				<label>
					{{ Form::checkbox('permissions[]', $permission->id, null)}}
					{{$permission->name}}
					<em>({{$permission->description ?: 'N/A'}})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('users.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>