
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME','Laravel Admin Boilerplate') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('admin.partials.__header')
        @include('admin.partials.__sidebar')

    <div class="content-wrapper">
        <div class="container-fluid pt-2">
            @include('flash::message')
        </div>
        @yield('content')
    </div>

        @include('admin.partials.__footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>
