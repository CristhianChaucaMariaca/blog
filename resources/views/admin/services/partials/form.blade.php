<div class="form-group">
    {{Form::label('name','Nombre del servicio')}}
    {{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>
<div class="form-group">
    {{Form::label('excerpt','Descripción corta')}}
    {{Form::textarea('excerpt',null,['class'=>'form-control','id'=>'excerpt'])}}
</div>
<div class="form-group">
    {{Form::label('description','Descripcion del servicio')}}
    {{Form::textarea('description',null,['class'=>'form-control','id'=>'description'])}}
</div>
<div class="form-group">
    {{Form::label('status','Elija estado del servicio')}}
    <label>
        {{Form::radio('status','DRAFT')}} Borrador
    </label>
    <label>
        {{Form::radio('status','PUBLISHED')}} Publicado
    </label>
</div>
<div class="form-group">
    {{Form::submit('Guardar',['class'=>'btn btn-primary btn-sm'])}}
</div>
