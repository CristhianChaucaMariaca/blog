@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">
                            {{$service->name}}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{$service->description}}
                        </p>
                        <a href="{{route('service',$service->id)}}" class="btn btn-primary">Detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
