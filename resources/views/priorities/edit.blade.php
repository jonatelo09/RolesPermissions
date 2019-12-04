@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Turno</h2>
                </div>

                <div class="card-body">
                    {!! Form::model($priority, ['route' => ['priorities.update', $priority->id], 'method' => 'PUT']) !!}

                        @include('priorities.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection