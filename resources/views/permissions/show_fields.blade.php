<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $permission->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $permission->name !!}</p>
</div>

<!-- Guard Name Field -->
<div class="form-group">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    <p>{!! $permission->guard_name !!}</p>
</div>

<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <p>{!! $permission->level !!}</p>
</div>

<!-- Group Field -->
<div class="form-group">
    {!! Form::label('group', 'Group:') !!}
    <p>{!! $permission->group !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $permission->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $permission->updated_at !!}</p>
</div>

