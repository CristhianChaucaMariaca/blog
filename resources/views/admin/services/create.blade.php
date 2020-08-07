@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Crear Servicio</h5>
                    </div>
                    <div class="card-body">
                        {!!Form::open(['route'=>'servicios.store'])!!}
                            @include('admin.services.partials.form')
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
