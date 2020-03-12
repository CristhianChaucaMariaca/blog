@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista de articulos</h1>
            @foreach ($posts as $post)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="">
                                {{$post->name}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                @if ($post->file)
                                    <img src="{{$post->file}}" class="img-fluid"/>
                                @endif
                                <p class="card-text">
                                    {{$post->excerpt}}
                                </p>
                                <a href="#" class="pull-right">Leer mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->render()}}
        </div>
    </div>
@endsection