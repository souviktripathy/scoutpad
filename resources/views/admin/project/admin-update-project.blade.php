@extends('admin.common.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Project</h1>
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
                                          <input type="text" class="form-control" name="project_name" id="project_name" value="{{ $project_data->name}}">
                                        </div>

                                         <div class="form-group">
                                          <label for="exampleInputPassword1">Short Description</label>
                                          <textarea class="form-control" rows="3" name="project_content" id="project_content"  >{{ $project_data->content}}</textarea>
                                        </div> 
                                          
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Long Description</label>
                                          <textarea class="form-control text-editor" rows="8" name="project_description" id="project_description" style="height:200px" >{{ $project_data->long_content}}</textarea>
                                        </div>   
                                          
                                          
                                          
                                          
                                       <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        @if($project_data->image!="") 
                                            <img src="{{ get_image_url($project_data->image,'project') }}" width="100" >
                                            @else
                                            <img src="" width="100" >
                                            @endif
                                        <div class="input-group">
                                          <div class="custom-file">

                                            <input type="file" class="custom-file-input" name="project_image" id="project_image">
                                            <label class="custom-file-label" for="exampleInputFile">Change Image</label>
                                          </div>

                                        </div>
                                      </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Project Status</label>
                                            <select class="form-control" name="project_status" id="project_status">
                                                <option value="1" <?php if($project_data->status==1){ echo "selected"; } ?>>Ongoing</option>
                                                  <option value="2" <?php if($project_data->status==2){ echo "selected"; } ?>>Upcoming</option>
                                                  <option value="3" <?php if($project_data->status==3){ echo "selected"; } ?>>Completed</option>

                                                </select>
                                          </div> 

                                          <div class="form-group clearfix">

                                              <div class="icheck-primary d-inline">
                                                @if($project_data->show_home==1) 
                                                <input type="checkbox" id="project_show_home" name="project_show_home" checked value="1">
                                                @else
                                                <input type="checkbox" id="project_show_home" name="project_show_home"  value="1">
                                                @endif
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
                                          <input type="text" class="form-control" name="project_location" id="project_location" value="{{ $project_data->location}}">
                                        </div>

                                         <div class="form-group" style="display:none;">
                                            <label for="exampleInputPassword1">Project Strategy</label>
                                          <input type="text" class="form-control" name="project_strategy" id="project_strategy" value="{{ $project_data->strategy}}">
                                        </div> 

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Numbers</label>
                                          <input type="text" class="form-control" name="project_numbers" id="project_numbers" value="{{ $project_data->numbers}}">
                                        </div> 

                                        <div class="form-group" style="display:none;">
                                            <label for="exampleInputPassword1">Risk(%)</label>
                                          <input type="text" class="form-control" name="project_risk" id="project_risk" value="{{ $project_data->risk}}">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Purchase Price</label>
                                          <input type="text" class="form-control" name="purchase_price" id="purchase_price" value="{{ $project_data->purchase_price}}">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Project Cost</label>
                                          <input type="text" class="form-control" name="projected_cost" id="projected_cost" value="{{ $project_data->projected_cost}}">
                                        </div> 
                                        
                                        <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Timeline</label>
                                          <input type="text" class="form-control" name="projected_timeline" id="projected_timeline" value="{{ $project_data->projected_timeline}}">
                                        </div> 
                                        
                                         <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Sale Price</label>
                                          <input type="text" class="form-control" name="sale_price" id="sale_price" value="{{ $project_data->sale_price}}">
                                        </div> 
                                        
                                         <div class="form-group" >
                                            <label for="exampleInputPassword1">Projected Net Profit</label>
                                          <input type="text" class="form-control" name="net_profit" id="net_profit" value="{{ $project_data->net_profit}}">
                                        </div> 

                                         <div class="form-group">
                                            <label for="exampleInputPassword1">Return(%)</label>
                                          <input type="text" class="form-control" name="projected_returns" id="projected_returns" value="{{ $project_data->projected_returns}}">
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
                                          <div class="previous_images_section">
                                              @foreach($project_images as $project_image)
                                              <div class="project-gallery-image">
                                              <img src="{{get_project_image_url_additional($project_image->image)}}">
                                              <span class="project-img-delete" data-item="image" data-id="{{ $project_image->id }}" data-image="{{ $project_image->image }}"><i class="fa fa-times"></i></span>
                                              </div>
                                              @endforeach
                                              
                                              
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
                                                @if($project_data->deck!="") 
                                                
                                                <a href="{{ get_file_path($project_data->deck,'deck') }}" target="_blank"><img src="{{ get_file_image($project_data->deck) }}" width="50" ></a>
                                                @endif
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Financial Information</label>
                                                   
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_financial" id="project_financial">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                                @if($project_data->financial!="") 
                                                <a href="{{ get_file_path($project_data->financial,'financial') }}" target="_blank"><img src="{{ get_file_image($project_data->financial) }}" width="50" ></a>
                                                @endif
                                            </div>
                                          
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">PDF</label>
                                                   
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_pdf" id="project_pdf">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                                @if($project_data->pdf!="") 
                                                <a href="{{ get_file_path($project_data->pdf,'pdf') }}" target="_blank"><img src="{{ get_file_image($project_data->pdf) }}" width="50" ></a>
                                                    @endif
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputFile">Contract Document</label>
                                                 
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="project_contract" id="project_contract">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                  </div>

                                                </div>
                                                @if($project_data->contract_doc!="") 
                                                <a href="{{ get_file_path($project_data->contract_doc,'contract_doc') }}" target="_blank"><img src="{{ get_file_image($project_data->contract_doc) }}" width="50" ></a>
                                                @endif
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
                                          @if($case_study)
                                          <input type="text" class="form-control" name="case_title" id="case_title" value="{{ $case_study->case_title}}">
                                          @else
                                          <input type="text" class="form-control" name="case_title" id="case_title" value="">

                                          @endif
                                        </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload PDF</label>
                                                   
                                                <div class="input-group">
                                                  <div class="custom-file">

                                                    <input type="file" class="custom-file-input" name="case_file" id="case_file">
                                                    <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                                    
                                                  </div>

                                                </div>
                                                @if($case_study && $case_study->case_file!="") 
                                                <a href="{{ get_file_path($case_study->case_file,'cases') }}" target="_blank"><img src="{{ get_file_image($case_study->case_file) }}" width="50" ></a>
                                                @endif
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
            <input type="hidden" name="sc_post_type" value="update_post">
            <input type="hidden" name="post_id" value="{{ $project_data->id}}"> 
           <button type="submit" class="btn btn-primary">Submit</button>
         </div>
        
    </form>
    </div>    
</section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    
    
  </div>
@endsection