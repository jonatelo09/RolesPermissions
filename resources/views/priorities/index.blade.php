@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Categoria
                @can('priorities.create')
                <div class="text-right">
                    <a href="{{ route('priorities.create')}}" class="btn btn-primary btn-sm">Crear</a>
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
                            @foreach($priorities as $priority)
                            <tr>
                                <td>{{$priority->id}}</td>
                                <td>{{$priority->name_pri}}</td>
                                <td width="10px">
                                    @can('priorities.show')
                                        <a href="{{ route('priorities.show', $priority->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('priorities.edit')
                                        <a href="{{ route('priorities.edit', $priority->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('priorities.destroy')
                                        {!! Form::open(['route' => ['priorities.destroy', $priority->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$priorities->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection