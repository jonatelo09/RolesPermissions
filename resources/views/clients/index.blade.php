@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Categoria
                @can('clients.create')
                <div class="text-right">
                    <a href="{{ route('clients.create')}}" class="btn btn-primary btn-sm">Crear</a>
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
                            @foreach($clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->name_cli}}</td>
                                <td width="10px">
                                    @can('clients.show')
                                        <a href="{{ route('clients.show', $client->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('clients.edit')
                                        <a href="{{ route('clients.edit', $client->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('clients.destroy')
                                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$clients->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection