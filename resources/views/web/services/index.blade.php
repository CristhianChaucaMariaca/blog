@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach ($services as $service)
                    @if ($service->status === "PUBLISHED")
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">
                                    {{$service->name}}
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{$service->excerpt}}
                                </p>
                                <a href="{{route('service',$service->id)}}" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
