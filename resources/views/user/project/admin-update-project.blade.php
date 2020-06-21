@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Project</h1>
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
             <form class="admin-project-form" id="admin-project-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" class="form-control" name="project_name" id="project_name" value="{{ $project_data->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Project Location</label>
                    <input type="text" class="form-control" name="project_location" id="project_location" value="{{ $project_data->location}}">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Project Description</label>
                    <textarea class="form-control" rows="3" name="project_content" id="project_content" placeholder="" >{{ $project_data->content}}</textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    @if($project_data->image!="") 
                        <img src="{{ get_image_url($project_data->image,'project') }}" width="100" >
                        @else
                        <img src="" width="100" >
                        @endif
                    <div class="input-group">
                      <div class="custom-file">
                        
                        <input type="file" class="custom-file-input" name="project_image" id="project_image">
                        <label class="custom-file-label" for="exampleInputFile">Change Image</label>
                      </div>
                      
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Project Strategy</label>
                    <input type="text" class="form-control" name="project_strategy" id="project_strategy" value="{{ $project_data->strategy}}">
                  </div>  
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Project Status</label>
                    <select class="form-control" name="project_status" id="project_status">
                        <option value="1" <?php if($project_data->status==1){ echo "selected"; } ?>>Ongoing</option>
                          <option value="2" <?php if($project_data->status==2){ echo "selected"; } ?>>Upcoming</option>
                          <option value="3" <?php if($project_data->status==3){ echo "selected"; } ?>>Completed</option>
                         
                        </select>
                  </div> 
                    
                  <div class="form-group clearfix">
                      
                      <div class="icheck-primary d-inline">
                        @if($project_data->show_home==1) 
                        <input type="checkbox" id="project_show_home" name="project_show_home" checked value="1">
                        @else
                        <input type="checkbox" id="project_show_home" name="project_show_home"  value="1">
                        @endif
                        <label for="project_show_home">
                          Show In Home Page
                        </label>
                      </div>
                    </div>  
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <input type="hidden" name="sc_post_type" value="update_post">
                   <input type="hidden" name="post_id" value="{{ $project_data->id}}"> 
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