@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Lista de mis Entradas</h1>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary">Crear</a>
                            </div>
                            <div class="col-md-6">
                                {{ Form::open( ['route'=> 'posts.index','method'=>'GET','class'=>'form-inline float-right'] ) }}
                                    <div class="form-group">
                                        {{ Form::text('name',old('name'),['class'=>'form-control form-control-sm','placeholder'=>'Nombre del Post']) }}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-secondary">
                                            buscar
                                        </button>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Name</th>
                                    <th>Estado</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post->id}}
                                        </td>
                                        <td>
                                            {{$post->name}}
                                        </td>
                                        <td>
                                            @if ($post->status == 'PUBLISHED')
                                                <span class="text-success">Publicado</span>
                                            @else
                                                <span class="text-muted">Borrador</span>
                                            @endif
                                        </td>
                                        <td width="10px"><a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-secondary">Ver</a></td>
                                        <td width="10px"><a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-secondary">Editar</a></td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$posts->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection