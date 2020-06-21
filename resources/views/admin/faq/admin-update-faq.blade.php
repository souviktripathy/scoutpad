@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Faq</h1>
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
             <form class="admin-faq-form" id="admin-faq-form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Question</label>
                    <input type="text" class="form-control" name="faq_question" id="faq_question" value="{{ $faq_data->question}}">
                  </div>
                   
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Answer</label>
                    <textarea class="form-control" rows="3" name="faq_answer" id="faq_answer" value="" >{{ $faq_data->answer}}</textarea>
                  </div> 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Sort Order</label>
                    <input type="number" class="form-control" name="faq_order" id="faq_order" value="{{ $faq_data->sort_order}}">
                  </div>
                 
                    
                 <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name="faq_status" id="faq_status">
                        <option value="1" <?php if($faq_data->status==1){ echo "selected"; } ?>>Active</option>
                          <option value="0" <?php if($faq_data->status==0){ echo "selected"; } ?>>Inactive</option>
                         
                         
                        </select>
                  </div>  
                    
                    <div class="form-group clearfix">
                      
                      <div class="icheck-primary d-inline">
                        @if($faq_data->is_main==1) 
                        <input type="checkbox" id="faq_main" name="faq_main" checked value="1">
                        @else
                        <input type="checkbox" id="faq_main" name="faq_main"  value="1">
                        @endif
                        <label for="faq_main">
                          Main Question?
                        </label>
                      </div>
                    </div>  
                    
                    
                    
                    
                    
                   
                    
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <input type="hidden" name="sc_post_type" value="update_post">
                   <input type="hidden" name="post_id" value="{{ $faq_data->id}}"> 
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