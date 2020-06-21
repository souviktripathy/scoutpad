@extends('frontend.common.layout')

@section('content')
      

    <section class="login-block">
        <div class="container"  >
            <div class="row">
                <div class="col-md-6 login-sec">
                    <h2 class="text-center">Login Now</h2>
                      @if (Session::has('error-message'))
                        <div class="alert alert-danger">
                          {{ Session::get('error-message') }}
                        </div>
                      @endif
                    <form class="login-form" action="{{ route('frontend-login-submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="text" name="login_username" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" name="login_password"  class="form-control" placeholder="">
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="login_remember_me" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Login</button> 
                        </div>

                    </form>
                    
                </div>
               
            </div>
    </section>

@endsection