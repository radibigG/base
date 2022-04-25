<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <title> AVRION RISK </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/vue-select.css">
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style media="screen"> [v-cloak] {  display: none!important; } </style>
    @yield('headers')
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div id="app" class="d-flex flex-column flex-root">
        <div v-cloak class="page d-flex flex-row flex-column-fluid">
            @include('_layouts/admin/components/aside')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('_layouts/admin/components/header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('_layouts/admin/components/toolbar')
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div v-cloak class="container-fluid">
                            @yield('modals')
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('_layouts/admin/drawers/activities')
    @include('_layouts/admin/drawers/chat')
    @include('_layouts/admin/drawers/invite')
    @include('_layouts/admin/drawers/create')
    @include('_layouts/admin/drawers/upgrade')
    @include('_layouts/admin/components/scrollToTop')
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('vuejs')
</body>
</html>
