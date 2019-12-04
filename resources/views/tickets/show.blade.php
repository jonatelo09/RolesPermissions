@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Producto {{$product->id}} </h2>
                </div>

                <div class="card-body">
                    <p><strong>Nombre: </strong>{{$product->name}} </p>
                    <p><strong>Descripcion: </strong>{{$product->description}} </p>
                </div>
                <div class="card-footer">
                    <a href="{{route('products.index')}}" class="btn btn-secondary btn-md">Atras</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection