@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Lista de articulos</h1>
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="">
                                {{$post->name}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                @if ($post->file)
                                    <img src="{{$post->file}}" class="img-fluidpull-right card-img"/>
                                @endif
                                <p class="card-text">
                                    {{$post->excerpt}}
                                </p>
                                <a href="{{route('post',$post->slug)}}" class="card-link">Leer mas</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$posts->render()}}
            </div>
        </div>
    </div>
@endsection