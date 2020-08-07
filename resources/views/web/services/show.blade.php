@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $service->name }}
                    </h5>
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
@endsection
