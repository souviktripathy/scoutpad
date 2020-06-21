@extends('user.common.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sign Contract</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
      <div class="row">
        <div class="col-6">
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
        <div class="callout callout-info">
              <h5><i class="fas fa-arrow-down"></i> Download:</h5>
              Download the contract document and print it.
              @if(get_loggedin_user_details()->contract_form!='')
              <a href="{{ get_file_path(get_loggedin_user_details()->contract_form,'contract') }}" target="_blank"> <button type="button" class="btn btn-danger" style="float:right"> Download</button></a>
              @endif
            </div> 
         
           
        </div>
        <!-- /.col -->

        <div class="col-6">
        
        <div class="callout callout-info">
              @if($project->status==0)
              <h5><i class="fas fa-arrow-up"></i> Upload:</h5>
              Upload the contract document after signing it.
              <div class="card card-primary">

                                      <div class="card-body">
                                      <form class="contract-sign-form" id="contract-sign-form" action="" method="post" enctype="multipart/form-data">
                                           @csrf 
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Choose File</label>
                                                  
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="contract_file" id="contract_file">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                               
                                                  
                                                <div class="input-group">
                                                <input type="hidden" name="contract_id" value="{{$project->id}}"> 
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                      </form> 

                                </div>      
                </div>
               
             
              
              @else
              
              You have already signed the contract.
              <a href="{{ get_file_path($project->signed_doc,'contract') }}" target="_blank"> <button type="button" class="btn btn-danger" style="float:right"> View</button></a>
              
              @endif 
            
            </div> 
         
           
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </section>
    
    
    
  </div>
@endsection



