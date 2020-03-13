@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$post->name}}</h1>
                    <div class="card mb-3">
                        <div class="card-header">
                            Categoria: <a href="{{ route('category', $post->category->slug) }}">{{$post->category->name}}</a>
                        </div>
                        <div class="card-body">
                            <div class="">
                                @if ($post->file)
                                    <img src="{{$post->file}}" class="img-fluidpull-right card-img"/>
                                @endif
                                <p class="card-text">
                                    {{$post->excerpt}}
                                    <hr>
                                    {!! $post->body !!}
                                    <hr>
                                    Etiquetas
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('tag',$tag->slug) }}" class="btn btn-outline-info btn-sm">{{ $tag->name }}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection