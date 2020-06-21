@extends('user.common.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Download Tax Form</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
      <div class="row">
        <div class="col-12">
        
        <div class="callout callout-info">
              <h5><i class="fas fa-arrow-down"></i> Tax Form:</h5>
              Download the tax form from here.
              @if(get_loggedin_user_details()->tax_form!='')
              <a href="{{ get_file_path(get_loggedin_user_details()->tax_form,'tax') }}" target="_blank"> <button type="button" class="btn btn-danger" style="float:right"> Download</button></a>
              @endif
           </div> 
         
           
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
    
  </div>
@endsection