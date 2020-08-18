@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        filtrado por producto
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-6">
                            <div class="card mb-5">
                                <div class="card-header">
                                    <h5 class="card-title text-center">
                                        {{$product->name}}
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-justify">
                                        {{$product->excerpt}}
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <p>
                                        <span>Descuento: </span>
                                        {{$product->offer}} %
                                    </p>
                                    <a href="{{route('producto',$product->id)}}" class="card-link">Detalle</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        {{$products->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
