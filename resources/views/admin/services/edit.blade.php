@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Editar Servicio</h5>
                    </div>
                    <div class="card-body">
                        {!!Form::model($service,['route'=>['servicios.update',$service->id],'method'=>'PUT'])!!}
                            @include('admin.services.partials.form')
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
