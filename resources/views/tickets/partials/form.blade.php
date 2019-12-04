<div class="form-group">
	<label class="form-control-label" for="commentary">Comentario</label>
	<input type="text" id="commentary" class="form-control form-control-alternative" name="commentary" placeholder="Escribe tu comentario...">
</div>
<input type="text" name="folio" value="{{date('d').''.date('m').''.date('y').''.rand()}} " style="display: none;">
<input type="text" name="user_id" value="{{auth()->user()->id}} " style="display: none;">
<div class="row">
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label" for="phone-fijo">Turno</label>
	    <select class="form-control" name="turn_id" required>
	      <option selected disabled>Selecciona una opción</option>
	      @foreach($turnos as $turno)
	      <option value="{{$turno->id}}">{{$turno->name_tur}} </option>
	      @endforeach
	    </select>
	  </div>
	</div>
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label" for="phone">Categoria</label>
	    <select class="form-control" name="category_id" required>
	      <option disabled selected>Seleccion un opción</option>
	      @foreach($categories as $category)
	      <option value="{{$category->id}}">{{$category->name_cat}}</option>
	      @endforeach
	    </select>
	  </div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label">Departamento</label>
	    <select name="client_id" class="form-control" required>
	      <option disabled selected>Selecciona una opción</option>
	      @foreach($clients as $client)
	      <option value="{{$client->id}} ">{{$client->name_cli}}</option>
	      @endforeach
	    </select>
	  </div>
	</div>
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label">Problema</label>
	    <select name="problem_id" class="form-control" required>
	      <option disabled selected>Selecciona una opción</option>
	      @foreach($problems as $problem)
	      <option value="{{$problem->id}} ">{{$problem->name_pro}}</option>
	      @endforeach
	    </select>
	  </div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label">Prioridad</label>
	    <select name="priority_id" class="form-control" required>
	      <option disabled selected>Selecciona una opción</option>
	      @foreach($priorities as $priority)
	      <option value="{{$priority->id}} ">{{$priority->name_pri}}</option>
	      @endforeach
	    </select>
	  </div>
	</div>
	<div class="col-lg-6">
	  <div class="form-group">
	    <label class="form-control-label">Status</label>
	    <select name="status_id" class="form-control" required>
	      <option disabled selected>Selecciona una opción</option>
	      @foreach($status as $statu)
	      <option value="{{$statu->id}} ">{{$statu->name_sta}}</option>
	      @endforeach
	    </select>
	  </div>
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-sm btn-primary'])}}
	<a href="{{route('products.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
</div>