@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            {{ $service->name }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $service->excerpt }}
                        </p>
                        <p class="card-text">
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
