@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Settings</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
      <div class="row">
        <div class="col-12">
           @if (Session::has('success-message'))
            <div class="alert alert-success">
              {{ Session::get('success-message') }}
            </div>
          @endif
          @if (Session::has('error-message'))
            <div class="alert alert-danger">
              {{ Session::get('error-message') }}
            </div>
          @endif
        <div class="card card-primary">
             
              <!-- form start -->
              <form class="admin-user-form-update" id="admin-user-form-update" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Title</label>
                    <input type="text" class="form-control" name="site_title" id="site_title" value="{{get_settings('site_title')}}">
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin Email</label>
                    <input type="text" class="form-control" name="admin_email" id="admin_email" value="{{get_settings('admin_email')}}">
                  </div>
                   
                  
                 <!-- <div class="form-group">
                    <label for="exampleInputFile">Tax Form</label>
                        
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input" name="tax_form" id="tax_form">
                        <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                        
                      </div>

                    </div>
                    @if(get_settings('tax_form')!="") 
                                                
                        <a href="{{ get_file_path(get_settings('tax_form'),'settings') }}" target="_blank"><img src="{{ get_file_image(get_settings('tax_form')) }}" width="50" ></a>
                        @endif
                </div>  -->
                    
                 
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
    
  </div>
@endsection