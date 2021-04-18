@extends('auth.layouts.app')
@section('auth')

<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
        @include('auth.partials.__error')
        @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
      <form action="{{ route('password.email') }}" method="POST" class="mb-2">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      @include('auth.partials.__login')
      @include('auth.partials.__register')
    </div>
    <!-- /.login-card-body -->
</div>
    
@endsection