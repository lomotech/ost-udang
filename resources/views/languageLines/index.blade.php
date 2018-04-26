@extends('layouts.app')

@section('content')
        <h1 class="pull-left">{{ __('languageLines.title') }}</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('admin.languageLines.create') !!}">{{ __('actions.add_new') }}</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('languageLines.table')
        
@endsection
