@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center">Lista de Categorias</h1>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary float-left">Crear</a>
                            </div>
                            <div class="col-md-6">
                                {{ Form::open(['route'=>'categories.index','method'=>'GET','class'=>'form-inline float-right']) }}
                                    <div class="form-group">
                                        {{ Form::text('name',null,['class'=>'form-control form-control-sm','placeholder'=>'Nombre']) }}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-secondary">Buscar</button>
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
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{$category->id}}
                                        </td>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td width="10px"><a href="{{route('categories.show',$category->id)}}" class="btn btn-sm btn-secondary">Ver</a></td>
                                        <td width="10px"><a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-secondary">Editar</a></td>
                                        <td width="10px">
                                            {!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection