<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Param 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('param_1', 'Param 1:') !!}
    {!! Form::text('param_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Param 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('param_2', 'Param 2:') !!}
    {!! Form::text('param_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Param 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('param_3', 'Param 3:') !!}
    {!! Form::text('param_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Param 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('param_4', 'Param 4:') !!}
    {!! Form::text('param_4', null, ['class' => 'form-control']) !!}
</div>

<!-- Param 5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('param_5', 'Param 5:') !!}
    {!! Form::text('param_5', null, ['class' => 'form-control']) !!}
</div>

<!-- Xref Custom Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xref_custom_category_id', 'Xref Custom Category Id:') !!}
    {!! Form::number('xref_custom_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Xref Custom Datum Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xref_custom_datum_id', 'Xref Custom Datum Id:') !!}
    {!! Form::number('xref_custom_datum_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::date('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('xrefCustomData.index') !!}" class="btn btn-default">Cancel</a>
</div>
