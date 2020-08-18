@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">
                            {{$product->name}}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-justify">
                            {{$product->excerpt}}
                        </p>
                        <p class="card-text text-justify">
                            {{$product->description}}
                        </p>
                        <p>
                            {{$product->offer}}
                        </p>
                        <p>
                            {{$product->price}}
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Añadir al carro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
