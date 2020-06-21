@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add User</h1>
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
              <form class="admin-user-form" id="admin-user-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Firstname</label>
                    <input type="text" class="form-control" name="user_firstname" id="user_firstname" placeholder="">
                  </div>
                   
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Lastname</label>
                    <input type="text" class="form-control" name="user_lastname" id="user_lastname" placeholder="">
                  </div> 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="user_email" id="user_email" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" name="user_phone" id="user_phone" value="">
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="user_password" id="user_password" placeholder="">
                  </div>
                 
                  <div class="form-group">
                  <label>Tags</label>
                  <select class="select2" multiple="multiple" name="user_tags[]"  data-placeholder="Select tags" style="width: 100%;">
                  
                    @foreach($tags_data as $row) 
                    <option>{!! $row->tag_name !!}</option>
                    @endforeach 
                  </select>
                  <script>
                    var tags_select_value= [];
                  </script>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Tax Form</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="tax_form" id="tax_form">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Contract Form</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="contract_form" id="contract_form">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="user_status" id="user_status">
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