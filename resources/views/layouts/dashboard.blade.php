<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/inspinia.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
</head>
<body>
<!-- Wrapper-->
<div id="wrapper ejinayat">

    <!-- Navigation -->
@include('layouts.navigation')

<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg sidebar-content">

        <!-- Page wrapper -->
        @include('layouts.topnavbar')

        <div class="sidebar-panel" style="min-height: calc(100% - 65px);">
            @if(auth()->user()->hasAnyPermission(['B5FIR:All:Create', 'B5FIR:State:Create', 'B5FIR:District:Create']))
                <div style="margin-top: 10px">
                    <a href="infoFirs/create" class="btn btn-block btn-primary">Cipta B5FIR</a>
                </div>
                <hr>
            @endif
            <div>
                @if(auth()->user()->hasPermissionTo('Penguatkuasa'))
                <h4 style="padding: 2px">B5FIR <span
                            class="badge badge-info pull-right">{{$task_number['b5fir']}}</span></h4>
                <h4 style="padding: 2px">B5KES <span
                            class="badge badge-info pull-right">{{$task_number['b5kes']}}</span></h4>
                @endif
                @if(auth()->user()->hasAnyPermission(['Pendakwa', 'Penguatkuasa']))
                    <h4 style="padding: 2px">IP <span class="badge badge-info pull-right">{{$task_number['ip']}}</span>
                    </h4>
                @endif
                @if(auth()->user()->hasPermissionTo('Pendakwa'))
                    <h4 style="padding: 2px">Kes <span
                                class="badge badge-info pull-right">{{$task_number['kes']}}</span></h4>
                    <h4 style="padding: 2px">Sidang <span
                                class="badge badge-info pull-right">{{$task_number['sidang']}}</span></h4>
                    <h4 style="padding: 2px">OTI <span
                                class="badge badge-info pull-right">{{$task_number['oti']}}</span></h4>
                @endif
            </div>
            <hr>
            <h2>Pengumuman</h2>
            @if($announcements->count() > 0)
                @foreach($announcements as $announcement)
                    <div style="padding-bottom: 10px">
                        <h3>{{$announcement->title}}</h3>
                        <p>{{$announcement->body}}</p>
                    </div>
                @endforeach
            @else
                <div style="padding-bottom: 10px">
                    <h3>Tiada Pengumuman Baharu</h3>
                </div>
            @endif
        </div>
        @yield('content')

    <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->
</div>

<script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/inspinia.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/flot.js') }}" type="text/javascript"></script>

@section('scripts')
@show
</body>
</html>
