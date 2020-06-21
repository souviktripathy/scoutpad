@extends('user.common.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Case Studies</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
      <div class="row">
          @foreach($cases as $case)
          @if($case->case_file!="")
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget">
              
              <div class="widget-user-header bg-info">
                  <a href="{{ route('project-details-page',$case->id) }}">  
                    @if(get_image_url($case->image,'project')!='')  
                    <img src="{{ get_image_url($case->image,'project') }}" alt="img" />  
                    @endif
                    <div class="widget-project-title">
                    <h3 class="widget-user-username">{{ $case->name }}</h3>
                    <h5 class="widget-user-desc">{{ $case->case_title }}</h5>
                    </div>
                  </a>
              </div>
             
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                    @if($case->case_file!="") 
                    <a href="{{ get_file_path($case->case_file,'cases') }}" target="_blank"> <button type="button" class="btn btn-danger"><i class="fa fa-arrow-down"></i> Download</button></a>
                    @endif 
                    </div>
                    <!-- /.description-block -->
                  </div>
                  
               
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          @endif
          @endforeach
          
          
         
          
          
      </div>
      <!-- /.row -->
    </section>


    
   
    
    
  </div>
@endsection