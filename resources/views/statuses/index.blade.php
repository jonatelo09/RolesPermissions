@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Categoria
                @can('statuses.create')
                <div class="text-right">
                    <a href="{{ route('statuses.create')}}" class="btn btn-primary btn-sm">Crear</a>
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
                            @foreach($statuses as $status)
                            <tr>
                                <td>{{$status->id}}</td>
                                <td>{{$status->name_sta}}</td>
                                <td width="10px">
                                    @can('statuses.show')
                                        <a href="{{ route('statuses.show', $status->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('statuses.edit')
                                        <a href="{{ route('statuses.edit', $status->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('statuses.destroy')
                                        {!! Form::open(['route' => ['statuses.destroy', $status->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$statuses->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection