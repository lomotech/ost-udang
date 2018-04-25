<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}}</title>

    {{--<!-- Fonts -->--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'--}}
    {{--type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

    {{--<!-- Bootstrap -->--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/css/bootstrap-toggle.min.css">--}}

    {{--<!-- DataTable Bootstrap -->--}}
    {{--<link href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" rel="stylesheet">--}}

    {{--<link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css"--}}
    {{--rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/inspinia.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>

    {{--<style type="text/css">--}}
    {{--.sidebar-nav li.active > a,--}}
    {{--.sidebar-nav li > a:focus {--}}
    {{--text-decoration: none;--}}
    {{--color: #fff;--}}
    {{--background: rgba(255, 255, 255, 0.2);--}}
    {{--}--}}

    {{--.header {--}}
    {{--width: 100%;--}}
    {{--background: #e7e7e7;--}}
    {{--color: #fff;--}}
    {{--height: 50px;--}}

    {{--}--}}
    {{--</style>--}}
</head>
<body>
<div id="wrapper ejinayat">
    @include('layouts.navigation')
    <div id="page-wrapper" class="gray-bg">
        @include('layouts.topnavbar')
        @include('layouts.breadcrumb')
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <!-- Main view  -->
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
<script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ mix('/js/inspinia.js') }}" type="text/javascript"></script>
@section('scripts')
@show
</body>
</html>
