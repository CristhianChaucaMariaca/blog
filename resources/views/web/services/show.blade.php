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
                @foreach ($service->products as $product)
                    @if ($product->status == 'PUBLISHED')
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="card-title">
                                    {{$product->name}}
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{$product->description}}
                                </p>
                                <a href="{{ $product->link }}" class="card-link">Consultar producto</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
