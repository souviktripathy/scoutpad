@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Faqs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
              <a href="{{ route('admin-add-faq') }}"><button type="button" class="btn btn-outline-secondary">Add Faq</button></a>
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
                  <th>Question</th>
                  <th>Sort Order</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($faqs_data))  
                @foreach($faqs_data as $row)    
                <tr>
                 
                  <td>{!! $row->question !!}</td>
                  <td>{!! $row->sort_order !!}</td>
                 
                  <td>{!! get_common_status($row->status) !!}</td>
                  <td>
                     <a href="{{ route('admin-update-faq',$row->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></a></button></a>
                     <button type="button" class="btn btn-danger deleteFaq" data-item="faq" data-id="{{ $row->id }}"><i class="fa fa-times"></i></button>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                  <th>Question</th>
                  <th>Sort Order</th>
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