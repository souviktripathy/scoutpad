@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin-dashboard-page') }}">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
      <div class="row">
        <div class="col-12">
        

          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Location</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($projects_data))  
                @foreach($projects_data as $row)    
                <tr>
                  <td><img src="{{ get_image_url($row->image,'project') }}" width="100" ></td>
                  <td>{!! $row->name !!}</td>
                  <td>{!! $row->location !!}</td>
                 
                  <td></td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                 <th>Image</th>
                  <th>Title</th>
                  <th>Location</th>
                  <th>Action</th>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
    
  </div>
@endsection