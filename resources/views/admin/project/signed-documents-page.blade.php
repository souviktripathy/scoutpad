@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Signed Documents</h1>
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
                  <th>Return Amount</th>
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
                  <td>${!! $row->return_amount !!}</td>
                  <td>
                     <a href="{{ get_file_path($row->signed_doc,'contract') }}" target="_blank"><button type="button" class="btn btn-danger">View</button></a>
                     <button type="button" class="btn btn-danger updateReturn" data-amount="{{$row->return_amount}}" data-project="{{$row->project_id}}" data-user="{{$row->user_id}}">Update Return Amount</button>
                  </td>
                </tr>
                @endforeach
                @endif
                </tbody>
                <tfoot>
                <th>User</th>
                  <th>Project</th>
                  <th>Invest</th>
                  <th>Return Amount</th>
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
    
    
<div class="modal" id="returnAmountModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Return Amount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Enter Return Amount</label>
        <input type="number" class="form-control" name="return_amount" id="return_amount" placeholder="" required>
      </div>
    
        
      <div class="form-group">
         <input type="hidden" name="invest_user_id" id="invest_user_id" value=""> 
         <input type="hidden" name="invest_project_id" id="invest_project_id" value=""> 
         <button type="button" class="btn btn-primary returnFormButton">Submit</button>
      </div>

      </div>
     
    </div>
  </div>
</div>
    
  </div>
@endsection