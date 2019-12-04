@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Departamento</h2>
                </div>

                <div class="card-body">
                    {!! Form::model($status, ['route' => ['statuses.update', $status->id], 'method' => 'PUT']) !!}

                        @include('statuses.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection