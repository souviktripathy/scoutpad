@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Testimonial</h1>
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
              <form class="admin-testimonial-form" id="admin-testimonial-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="testimonial_name" id="testimonial_name" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" class="form-control" name="testimonial_designation" id="testimonial_designation" placeholder="">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" class="form-control" name="testimonial_location" id="testimonial_location" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" rows="3" name="testimonial_content" id="testimonial_content" placeholder="" ></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="testimonial_image" id="project_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                 
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="testimonial_status" id="testimonial_status">
                        <option value="1">Active</option>
                          <option value="0">Inactive</option>
                         
                         
                        </select>
                  </div> 
                    
                    
                 
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <input type="hidden" name="sc_post_type" value="add_post"> 
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