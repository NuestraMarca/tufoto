{!! Form::model($category, $form_data) !!}

    {!! Field::text('title_singular', ['ph' => 'Nombre en singular'])!!}
    {!! Field::text('title_plural', ['ph' => 'Nombre en plural'])!!}
    {!! Field::file('cover', ['ph' => 'Cover de la Categoría'])!!}
    {!! Field::textarea('description', ['ph' => 'Descripción de la categoría'])!!}
    {!! Field::textarea('seo_title', ['ph' => 'Titulo SEO de la categoría'])!!}
    {!! Field::textarea('seo_description', ['ph' => 'Descripción SEO de la categoría'])!!}
    
    <div class="form-group form-actions">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-effect-ripple btn-primary"> 
                <i class="gi gi-thumbs_up"></i> Guardar
            </button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-effect-ripple btn-danger"> 
                <i class="fa fa-frown-o"></i> Cancelar
            </a>
        </div>
    </div>

{!! Form::close() !!}