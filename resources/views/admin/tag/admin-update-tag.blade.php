@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Tag</h1>
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
             <form class="admin-tag-form" id="admin-tag-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tag Name</label>
                    <input type="text" class="form-control" name="tag_name" id="tag_name" value="{{ $tag_data->tag_name}}">
                  </div>
                   
                  
                    
                     
                    
                    
                    
                    
                    
                   
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <input type="hidden" name="sc_post_type" value="update_post">
                   <input type="hidden" name="post_id" value="{{ $tag_data->id}}"> 
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