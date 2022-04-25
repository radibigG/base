<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <title> CRYPTOSCAM </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style media="screen"> [v-cloak] {  display: none!important; } </style>
    @yield('headers')
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div id="app" class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('_layouts/user/components/aside')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('_layouts/user/components/header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div v-cloak class="container">
                            @yield('modals')
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('vuejs')
</body>
</html>
