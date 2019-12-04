@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Problema
                @can('problems.create')
                <div class="text-right">
                    <a href="{{ route('problems.create')}}" class="btn btn-primary btn-sm">Crear</a>
                </div>
                @endcan
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead>
                            <tr>
                                <th width="3">ID</th>
                                <th width="3">Nombre</th>
                                <th width="3">Descripcion</th>
                                <th colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($problems as $problem)
                            <tr>
                                <td width="3">{{$problem->id}}</td>
                                <td width="3">{{$problem->name_pro}}</td>
                                <td width="3">{{$problem->description}} </td>
                                <td>
                                    @can('problems.show')
                                        <a href="{{ route('problems.show', $problem->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('problems.edit')
                                        <a href="{{ route('problems.edit', $problem->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('problems.destroy')
                                        {!! Form::open(['route' => ['problems.destroy', $problem->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$problems->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection