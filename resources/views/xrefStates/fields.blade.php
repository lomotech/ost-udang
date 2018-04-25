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

<!-- Name Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_long', 'Name Long:') !!}
    {!! Form::text('name_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddsa Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddsa_code', 'Ddsa Code:') !!}
    {!! Form::text('ddsa_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Alpha 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alpha_2', 'Alpha 2:') !!}
    {!! Form::text('alpha_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Alpha 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alpha_3', 'Alpha 3:') !!}
    {!! Form::text('alpha_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Capital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capital', 'Capital:') !!}
    {!! Form::text('capital', null, ['class' => 'form-control']) !!}
</div>

<!-- Xref Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xref_country_id', 'Xref Country Id:') !!}
    {!! Form::number('xref_country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Active At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active_at', 'Active At:') !!}
    {!! Form::date('active_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Inactive At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inactive_at', 'Inactive At:') !!}
    {!! Form::date('inactive_at', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('xrefStates.index') !!}" class="btn btn-default">Cancel</a>
</div>
