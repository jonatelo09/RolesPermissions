@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Categoria
                @can('categories.create')
                <div class="text-right">
                    <a href="{{ route('categories.create')}}" class="btn btn-primary btn-sm">Crear</a>
                </div>
                @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name_cat}}</td>
                                <td width="10px">
                                    @can('categories.show')
                                        <a href="{{ route('categories.show', $category->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('categories.edit')
                                        <a href="{{ route('categories.edit', $category->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('categories.destroy')
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection