@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Departamento {{$client->id}} </h2>
                </div>

                <div class="card-body">
                    {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT']) !!}

                        @include('clients.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection