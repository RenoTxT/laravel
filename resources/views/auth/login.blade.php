@extends('layouts.auth')

@section('login')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">

              <div class="card-body">
                <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group has-feedback @error('email') has-error @enderror">
                    <i class="fa fa-envelope"></i>
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required value="{{old('email')}}">
                    <div class="has-error" style="color: red;">
                      @error('email')
                          <span class="help-block">{{$message}}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group has-feedback @error('password') has-error @enderror">
                    <div class="d-block">
                        <i class="fa fa-lock"></i>
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="has-error" style="color: red;">
                        @error('password')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                      </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kanazuki 2023
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
