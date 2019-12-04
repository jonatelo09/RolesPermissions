@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2 class="text-dark">Departamento </h2>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'turns.store']) !!}

                        @include('turns.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection