@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Testimonial</h1>
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
             <form class="admin-testimonial-form" id="admin-project-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="testimonial_name" id="testimonial_name" value="{{ $testimonial_data->name}}">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" class="form-control" name="testimonial_designation" id="testimonial_designation" value="{{ $testimonial_data->designation}}">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" class="form-control" name="testimonial_location" id="testimonial_location" value="{{ $testimonial_data->location}}">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" rows="3" name="testimonial_content" id="testimonial_content" placeholder="" >{{ $testimonial_data->message}}</textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                     @if($testimonial_data->image!="") 
                        <img src="{{ get_image_url($testimonial_data->image,'testimonial') }}" width="100" >
                        @else
                        <img src="" width="100" >
                        @endif
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="testimonial_image" id="project_image">
                        <label class="custom-file-label" for="exampleInputFile">Change Image</label>
                      </div>
                      
                    </div>
                  </div>
                 
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="testimonial_status" id="testimonial_status">
                        <option value="1" <?php if($testimonial_data->status==1){ echo "selected"; } ?>>Active</option>
                          <option value="0" <?php if($testimonial_data->status==0){ echo "selected"; } ?>>Inactive</option>
                         
                         
                        </select>
                  </div>  
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <input type="hidden" name="sc_post_type" value="update_post">
                   <input type="hidden" name="post_id" value="{{ $testimonial_data->id}}"> 
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