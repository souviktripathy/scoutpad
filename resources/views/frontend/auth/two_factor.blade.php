@extends('frontend.common.layout')

@section('content')
      

    <section class="login-block">
        <div class="container"  >
            <div class="row">
                <div class="col-md-6 login-sec">
                    <h2 class="text-center">Verify Now</h2>
                      @if (Session::has('error-message'))
                        <div class="alert alert-danger">
                          {{ Session::get('error-message') }}
                        </div>
                      @endif
                    <form class="login-form" id="twofactor-form" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Enter the code you received in your email</label>
                            <input type="text" name="login_code" class="form-control" placeholder="">

                        </div>
                        
                        <div class="form-check">
                               
                            <button type="submit" class="btn btn-login float-right">Submit</button> 
                        </div>

                    </form>
                    
                </div>
               
            </div>
    </section>

@endsection