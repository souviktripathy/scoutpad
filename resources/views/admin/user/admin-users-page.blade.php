@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
              <a href="{{ route('admin-add-user') }}"><button type="button" class="btn btn-outline-secondary">Add User</button></a>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Tags</th>
                  <th>Total Invest</th>
                  <th>Created On</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($users_data))  
                @foreach($users_data as $row)    
                <tr>
                 
                  <td>{!! $row->firstname.' '.$row->lastname !!}</td>
                  
                  <td>{!! $row->email !!}</td>
                  <td>{!! str_replace('"', '', $row->tags); !!}</td>
                  <td>${!! total_capital_by_user($row->id) !!}</td>
                  <td>{!! $row->created_at !!}</td>
                  <td>{!! get_common_status($row->user_status) !!}</td>
                  <td>
                     <a href="{{ route('admin-update-user',$row->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></a></button></a>
                     <button type="button" class="btn btn-danger deleteUser" data-item="user" data-id="{{ $row->id }}"><i class="fa fa-times"></i></button>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <th>Name</th>
                  <th>Email</th>
                  <th>Tags</th>
                  <th>Created On</th>
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