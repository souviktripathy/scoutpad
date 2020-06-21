@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Project</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    
<section class="content">
    <div class="container-fluid">
               <form class="admin-project-form" id="admin-project-form" action="" method="post" enctype="multipart/form-data">
        @csrf 

        <div class="card card-primary card-outline">
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">General</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Image Gallery</a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-files-tab" data-toggle="pill" href="#custom-content-below-files" role="tab" aria-controls="custom-content-below-files" aria-selected="false">Files</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-cases-tab" data-toggle="pill" href="#custom-content-below-cases" role="tab" aria-controls="custom-content-below-cases" aria-selected="false">Case Studies</a>
                      </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                          
                            <div class="row">
                              <div class="col-8">
                                 @if (Session::has('success-message'))
                                  <div class="alert alert-success">
                                    {{ Session::get('success-message') }}
                                  </div>
                                @endif
                                @if (Session::has('error-message'))
                                  <div class="alert alert-danger">
                                    {{ Session::get('error-message') }}
                                  </div>
                                @endif
                              <div class="card card-primary">

                                    <!-- form start -->

                                      <div class="card-body">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Project Name</label>
                                          <input type="text" class="form-control" name="project_name" id="project_name" placeholder="">
                                        </div>

                                         <div class="form-group">
                                          <label for="exampleInputPassword1">Short Description</label>
                                          <textarea class="form-control" rows="3" name="project_content" id="project_content" placeholder="" ></textarea>
                                        </div> 
                                          
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Long Description</label>
                                          <textarea class="form-control text-editor" rows="3" name="project_description" id="project_description" placeholder="" ></textarea>
                                        </div>   
                                          
                                          
                                          
                                          
                                        <div class="form-group">
                                          <label for="exampleInputFile">Image</label>
                                          <div class="input-group">
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" name="project_image" id="project_image">
                                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>

                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Project Status</label>
                                          <select class="form-control" name="project_status" id="project_status">
                                              <option value="1">Ongoing</option>
                                                <option value="2">Upcoming</option>
                                                <option value="3">Completed</option>

                                              </select>
                                        </div> 


                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="project_show_home" name="project_show_home" value="1">
                                              <label for="project_show_home">
                                                Show In Home Page
                                              </label>
                                            </div>
                                          </div>   


                                        

                                      </div>
                                      <!-- /.card-body -->

                                     
                                  </div>
                                <!-- /.card -->
                              </div>
                              <!-- /.col -->

                              <div class="col-4">
                                   <div class="card card-primary">
                                     <div class="card-body">
                                         <div class="form-group">
                                          <label for="exampleInputPassword1">Project Location</label>
                                          <input type="text" class="form-control" name="project_location" id="project_location" value="">
                                        </div>

                                         <div class="form-group" style="display:none;">
                                            <label for="exampleInputPassword1">Project Strategy</label>
                                          <input type="text" class="form-control" name="project_strategy" id="project_strategy" value="">
                                        </div> 

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Numbers</label>
                                          <input type="text" class="form-control" name="project_numbers" id="project_numbers" value="">
                                        </div> 

                                          <div class="form-group" style="display:none;">
                                            <label for="exampleInputPassword1">Risk(%)</label>
                                          <input type="text" class="form-control" name="project_risk" id="project_risk" value="">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Purchase Price</label>
                                          <input type="text" class="form-control" name="purchase_price" id="purchase_price" value="">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Project Cost</label>
                                          <input type="text" class="form-control" name="projected_cost" id="projected_cost" value="">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Timeline</label>
                                          <input type="text" class="form-control" name="projected_timeline" id="projected_timeline" value="">
                                        </div> 
                                        
                                         <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Sale Price</label>
                                          <input type="text" class="form-control" name="sale_price" id="sale_price" value="">
                                        </div> 
                                        
                                         <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Net Profit</label>
                                          <input type="text" class="form-control" name="net_profit" id="net_profit" value="">
                                        </div> 

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Return(%)</label>
                                          <input type="text" class="form-control" name="projected_returns" id="projected_returns" value="">
                                        </div> 

                                     </div> 
                                   </div> 
                                </div> 


                            </div>

                            <!-- /.row -->
                         
                      </div>
                      <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                        
                            <div class="row">
                              <div class="col-12">
                                
                              <div class="card card-primary">

                                      <div class="card-body">
                                       
  


                                       <div class="form-group">
                                          <label for="exampleInputFile">Additional Images</label>
                                          <div class="input-group">
                                            <div class="project-gallery-images"></div>

                                          </div>
                                         
                                        </div>

                                      </div>
                                      <!-- /.card-body -->

                                      
                                  </div>
                                <!-- /.card -->
                              </div>
                             


                            </div>

                            <!-- /.row -->
                         
                      </div>
                    
                      <div class="tab-pane fade" id="custom-content-below-files" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                       
                            <div class="row">
                              <div class="col-12">
                                
                                 <div class="card card-primary">

                                      <div class="card-body">
                                          
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Deck</label>
                                                  
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_deck" id="project_deck">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Financial Information</label>
                                                  
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_financial" id="project_financial">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                            </div>
                                          
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">PDF</label>
                                                 
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_pdf" id="project_pdf">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Contract Document</label>
                                                 
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_contract" id="project_contract">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                            </div>
                                          
                                      </div>
                                 </div>
                               </div>
                            </div>
                        </div>    
                     
                
                        <div class="tab-pane fade" id="custom-content-below-cases" role="tabpanel" aria-labelledby="custom-content-below-cases-tab">
                      <div class="row">
                              <div class="col-12">
                                
                                 <div class="card card-primary">

                                      <div class="card-body">
                                          
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Case Study Title</label>
                                         
                                          <input type="text" class="form-control" name="case_title" id="case_title" value="">

                                         
                                        </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload PDF</label>
                                                   
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="case_file" id="case_file">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                    
                                                  </div>

                                                </div>
                                               
                                            </div>   
                                        </div>
                                  </div>  
                            </div>     
                            </div>  

                      </div>
                
                
                
                </div>
            </div>
        </div>    
        
         <div class="card-footer">
         <input type="hidden" name="sc_post_type" value="add_post"> 
         <button type="submit" class="btn btn-primary">Submit</button>
         </div>
       </form>
        
        
    </div>    
</section>
    
    
    
    
   
     
    
    
    
    
  </div>
@endsection