@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">Lista de Servicios</h5><a href="{{route('servicios.create')}}" class="btn btn-sm btn-primary">Crear Servicio</a>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="3">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td width="10px">
                                    {{$service->id}}
                                </td>
                                <td>
                                    {{$service->name}}
                                </td>
                                <td>
                                    {{$service->description}}
                                </td>
                                <td width="10px">
                                    <a href="{{route('servicios.show', $service->id)}}" class="btn btn-sm btn-info">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('servicios.edit',$service->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['servicios.destroy',$service->id], 'method'=>'DELETE']) !!}
                                        <button class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
