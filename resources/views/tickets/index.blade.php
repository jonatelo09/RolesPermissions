@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Productos
                @can('tickets.create')
                <div class="text-right">
                    <a href="{{ route('tickets.create')}}" class="btn btn-primary btn-sm">Crear</a>
                </div>
                @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th scope="col">Folio</th>
                                <th scope="col">Problema</th>
                                <th scope="col">Turno</th>
                                <th scope="col">Status</th>
                                <th scope="col">Prioridad</th>
                                <th scope="col">Opciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                      <div class="media-body">
                                        <span class="mb-0 text-sm">{{$ticket->id}} </span>
                                      </div>
                                    </div>
                                </th>
                                <td>{{$ticket->folio}} </td>
                              <td>{{$ticket->name_pro}} </td>
                              <td>{{$ticket->name_tur}} </td>
                              <td>{{$ticket->name_sta}} </td>
                              <td>
                                <span class="badge badge-dot mr-4"> {{$ticket->name_pri}}
                                </span>
                              </td>
                                <td width="10px">
                                    @can('tickets.show')
                                        <a href="{{ route('tickets.show', $ticket->id)}}" class="btn btn-sm btn-secondary">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('tickets.edit')
                                        <a href="{{ route('tickets.edit', $ticket->id)}}" class="ml-2 btn btn-sm btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('tickets.destroy')
                                        {!! Form::open(['route' => ['tickets.destroy', $ticket->id], 'method' => 'DELETE']) !!}
                                            <button class="ml-2 btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tickets->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection