@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Unsigned Documents</h1>
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
                  <th>User</th>
                  <th>Project</th>
                  <th>Invest</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($documents))  
                @foreach($documents as $row)    
                <tr>
                 
                  <td>{!! $row->firstname.' '.$row->lastname !!}</td>
                  <td>{!! $row->name !!}</td>
                  <td>${!! $row->amount !!}</td>
                  
                  <td>
                     <button type="button" data-id="{{ $row->id }}" data-pid="{{ $row->project_id }}" class="btn btn-danger notifyUnsigned">Notify</button>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <th>User</th>
                  <th>Project</th>
                  <th>Invest</th> 
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