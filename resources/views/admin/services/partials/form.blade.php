<div class="form-group">
    {{Form::label('name','Nombre del servicio')}}
    {{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>
<div class="form-group">
    {{Form::label('description','Descripcion del servicio')}}
    {{Form::textarea('description',null,['class'=>'form-control','id'=>'description'])}}
</div>
<div class="form-group">
    {{Form::submit('Guardar',['class'=>'btn btn-primary btn-sm'])}}
</div>
