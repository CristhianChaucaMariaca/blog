@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{Form::open(['route'=>'blog','method'=>'GET','class'=>'form-inline float-right'])}}
                            <div class="form-group">
                                {{Form::text('name',null,['class'=>'form-control form-control-sm','placeholder'=>'Nombre'])}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                
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