@extends('user.common.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Documents</h1>
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
                  <th>Project Title</th>
                  <th>Invest</th>
                  <th>Return Amount</th>
                  <th>Start Date</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($documents))  
                @foreach($documents as $row)    
                <tr>
                  <td><img src="{{ get_image_url($row->image,'project') }}" width="100" ></td>
                  <td>{!! $row->name !!}</td>
                  <td>${!! $row->amount !!}</td>
                  <td>${!! $row->return_amount !!}</td>
                  <td>{!! date("m-d-Y",strtotime($row->created_at)) !!}</td>
                  <td>{!! get_documents_status($row->status) !!}</td>
                  <td>
                     
                    <a href="{{ route('contract-sign-page',$row->id) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-pen"></i> Sign</button> </a>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <th>Image</th>
                  <th>Project Title</th>
                  <th>Invest</th>
                  <th>Start Date</th>
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