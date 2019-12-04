@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Categoria
                @can('turns.create')
                <div class="text-right">
                    <a href="{{ route('turns.create')}}" class="btn btn-primary btn-sm">Crear</a>
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
                            @foreach($turnos as $turns)
                            <tr>
                                <td>{{$turns->id}}</td>
                                <td>{{$turns->name_tur}}</td>
                                <td width="10px">
                                    @can('turns.show')
                                        <a href="{{ route('turns.show', $turns->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('turns.edit')
                                        <a href="{{ route('turns.edit', $turns->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('turns.destroy')
                                        {!! Form::open(['route' => ['turns.destroy', $turns->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$turnos->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection