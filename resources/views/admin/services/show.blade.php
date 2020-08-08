@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">{{$service->name}}</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Extracto:</h5>
                        <p class="card-text text-justify">
                            {{$service->excerpt}}
                        </p>
                        <h5 class="card-title">Descripción:</h5>
                        <p class="card-text text-justify">
                            {{$service->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
