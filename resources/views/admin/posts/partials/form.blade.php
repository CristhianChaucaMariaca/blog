{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id','Categorias') }}
    {{ Form::select('category_id',$categories,null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name','Nombre de la Entrada') }}
    {{ Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>
<div class="form-group">
    {{ Form::label('slug','URL ') }}
    {{ Form::text('slug',null,['class'=>'form-control','id'=>'slug'])}}
</div>
<div class="form-group">
    {{ Form::label('file','Imagen')}}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('status','Estado') }}
    <label>
        {{Form::radio('status','PUBLISHED')}} Publicado
    </label>
    <label>
        {{Form::radio('status','DRAFT')}} Borrador
    </label>
</div>
<hr>
<div class="form-group">
    {{Form::label('tags','Etiquetas')}}
    <div>
        @foreach ($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{$tag->name}}
            </label>
        @endforeach
    </div>
</div>
<hr>
<div class="form-group">
    {{Form::label('excerpt','Estracto')}}
    {{Form::textarea('excerpt',null,['class'=>'form-control','rows'=>'2'])}}
</div>
<div class="form-group">
    {{ Form::label('body','Entrada') }}
    {{ Form::textarea('body',null,['class'=>'form-control','id'=>'body'])}}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
</div>
@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection