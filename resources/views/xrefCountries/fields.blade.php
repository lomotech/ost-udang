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

<!-- Olympic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('olympic', 'Olympic:') !!}
    {!! Form::text('olympic', null, ['class' => 'form-control']) !!}
</div>

<!-- Fifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fifa', 'Fifa:') !!}
    {!! Form::text('fifa', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_name', 'Currency Name:') !!}
    {!! Form::text('currency_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Alpha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_alpha', 'Currency Alpha:') !!}
    {!! Form::text('currency_alpha', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Minor Decimal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_minor_decimal', 'Currency Minor Decimal:') !!}
    {!! Form::text('currency_minor_decimal', null, ['class' => 'form-control']) !!}
</div>

<!-- Capital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capital', 'Capital:') !!}
    {!! Form::text('capital', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('xrefCountries.index') !!}" class="btn btn-default">Cancel</a>
</div>
