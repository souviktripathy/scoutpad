@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Testimonials</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
              <a href="{{ route('admin-add-testimonial') }}"><button type="button" class="btn btn-outline-secondary">Add Testimonial</button></a>
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
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Location</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($testimonials_data))  
                @foreach($testimonials_data as $row)    
                <tr>
                  <td><img src="{{ get_image_url($row->image,'testimonial') }}" width="100" ></td>
                  <td>{!! $row->name !!}</td>
                  <td>{!! $row->designation !!}</td>
                  <td>{!! $row->location !!}</td>
                  <td>{!! get_common_status($row->status) !!}</td>
                  <td>
                     <a href="{{ route('admin-update-testimonial',$row->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></a></button></a>
                     <button type="button" class="btn btn-danger deleteTestimonial" data-item="testimonial" data-id="{{ $row->id }}"><i class="fa fa-times"></i></button>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Location</th>
                  <th>Status</th>
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