
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME','Laravel Admin Boilerplate') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('admin.partials.__header')
        @include('admin.partials.__sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

        @include('admin.partials.__footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
