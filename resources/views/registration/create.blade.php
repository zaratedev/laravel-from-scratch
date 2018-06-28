@extends('layout.app')

@section('content')
  <div class="container">
      <h1>Register</h1>
      <hr>
      <div class="row">
          <div class="col-lg-8">
              <form method="post" action="{{ url('/register') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" id="name" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" value="" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" value="" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="password_confirmation">Password Confirmation</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Register</button>
                  </div>
                  @include('layout.errors')
              </form>
          </div>
      </div>
  </div>
@endsection
