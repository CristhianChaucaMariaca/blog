@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>
                                    Lista de Etiquetas
                                </h1>
                                <hr>
                            </div>
                            <div class="col-md-6 float-left">
                                <a href="{{route('tags.create')}}" class="btn btn-primary btn-sm">Crear</a>
                            </div>
                            <div class="col-md-6 float-right">
                                {{ Form::open(['route'=>'tags.index','method'=>'GET','class'=>'form-inline float-right']) }}
                                    <div class="form-group">
                                        {{ Form::text('name',null,['class'=>'form-control form-control-sm','placeholder'=>'Nombre']) }}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
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
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>
                                            {{$tag->id}}
                                        </td>
                                        <td>
                                            {{$tag->name}}
                                        </td>
                                        <td width="10px"><a href="{{route('tags.show',$tag->id)}}" class="btn btn-sm btn-secondary">Ver</a></td>
                                        <td width="10px"><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-sm btn-secondary">Editar</a></td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$tags->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection