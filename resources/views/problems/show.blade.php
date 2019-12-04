@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Problema {{$problem->id}} </h2>
                </div>

                <div class="card-body">
                    <p><strong>Nombre: </strong>{{$problem->name_pro}} </p>
                    <p><strong>Descripcion: </strong>{{$problem->description}} </p>
                </div>
                <div class="card-footer">
                    <a href="{{route('problems.index')}}" class="btn btn-secondary btn-md">Atras</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection