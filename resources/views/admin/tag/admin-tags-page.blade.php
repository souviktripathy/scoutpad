@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tags</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
              <a href="{{ route('admin-add-tag') }}"><button type="button" class="btn btn-outline-secondary">Add Tag</button></a>
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
                  <th>Tag Name</th>
                 
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @if(!empty($tags_data))  
                @foreach($tags_data as $row)    
                <tr>
                 
                  <td>{!! $row->tag_name !!}</td>
                 
                  <td>
                     <a href="{{ route('admin-update-tag',$row->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-edit"></i></a></button></a>
                     <button type="button" class="btn btn-danger deleteTag" data-item="tag" data-id="{{ $row->id }}"><i class="fa fa-times"></i></button>
                     
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <th>Tag Name</th>
                 
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