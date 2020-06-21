@extends('user.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projects</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
      <div class="row">
          @foreach($upcoming_projects as $upcoming_project)
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget">
              
              <div class="widget-user-header bg-info">
                  <a href="{{ route('project-details-page',$upcoming_project->id) }}">  
                    @if(get_image_url($upcoming_project->image,'project')!='')  
                    <img src="{{ get_image_url($upcoming_project->image,'project') }}" alt="img" />  
                    @endif
                    <div class="widget-project-title">
                    <h3 class="widget-user-username">{{ $upcoming_project->name }}</h3>
                    <h5 class="widget-user-desc">{{ $upcoming_project->location }}</h5>
                    </div>
                  </a>
              </div>
             
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ $upcoming_project->numbers }}</h5>
                      <span class="description-text">Numbers</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ $upcoming_project->projected_cost }}</h5>
                      <span class="description-text">Cost</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">{{ $upcoming_project->projected_returns }}</h5>
                      <span class="description-text">Returns</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          @endforeach
          
          
         
          
          
      </div>
      <!-- /.row -->
    </section>
    
    
    
  </div>
@endsection