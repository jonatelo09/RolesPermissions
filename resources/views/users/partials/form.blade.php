<div class="form-group">
	{{ Form::label('name', 'Nombre del usuario')}}
	{{ Form::text('name',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email del usuario')}}
	{{ Form::text('email',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null)}}
					{{$role->name}}
					<em>({{$role->description ?: 'N/A'}})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>
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