
<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group', 'Group:') !!}
    {!! Form::text('group', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key', 'Text:') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('languageLines.index') !!}" class="btn btn-default">Cancel</a>
</div>
