
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME','Laravel Boilerplate') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url()->current() }}"><b>{{ env('APP_NAME','LARAVEL') }}</b></a>
  </div>
  <!-- /.login-logo -->
    @yield('auth')
</div>
<!-- /.login-box -->


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
