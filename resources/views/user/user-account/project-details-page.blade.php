@extends('user.common.layout')

@section('content')
<style>


/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
  
}
.mySlides img {
 
}
/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
 .prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color:#fff!important;
}
.next{
    right: 8px;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width:100px;
      margin-left: 8px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.mySlides{
   display: block;
    width: 100%;
    height: 320px; 
}    
.mySlides img{
    height: 100%;
    margin: 0 auto;
    display: block;
    object-fit: cover;
}
.column img.demo.cursor{
       width: 100%;
    height: 100px;
    object-fit: cover;
    margin: 0 auto;
    display: block;

}   
.prev, .next {
    background: #dce5ee;
}
</style>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">{{$pdetails->name}}</h1>
            <h4>{{$pdetails->location}}</h4>
          </div><!-- /.col -->
          <div class="col-sm-2">
          </div> 
          
          <div class="col-sm-2">
              @if($pdetails->deck!="") 
              <a href="{{ get_file_path($pdetails->deck,'deck') }}" target="_blank"><button type="button" class="btn btn-block btn-secondary btn-sm">Deck</button></a>
              @endif
          </div> 
          
          
          <div class="col-sm-2">
              @if($pdetails->financial!="")
              <a href="{{ get_file_path($pdetails->financial,'financial') }}" target="_blank"><button type="button" class="btn btn-block btn-secondary btn-sm">Financial Information</button></a>
               @endif
          </div>  
         
         
          <div class="col-sm-2">   
              <button type="button" class="btn btn-block btn-success btn-flat btn-sm interested" data-project="{{$pdetails->id}}" data-user="{{get_loggedin_user_details()->id}}">Interested</button>
          </div>
          
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <section class="content">
    <div class="row">
       <div class="col-8">
            <div class="card card-primary">
               <div class="card-body">
                   <p>{!! html_entity_decode($pdetails->long_content)!!}</p>
               </div>
           </div>
           
            <div class="card card-primary">
                        <div class="card-body">  
                            <div class="mySlides">

                              <img src="{{ get_image_url($pdetails->image,'project') }}" >
                            </div>
                            @foreach($pimages as $pimage)
                            <div class="mySlides">

                              <img src="{{get_project_image_url_additional($pimage->image)}}" >
                            </div>
                            @endforeach
                        </div>
             </div>
                
    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

  
                <div class="row" >
                  <div class="col-md-12" style="">  
                   <div class="card card-primary">
                        <div class="card-body">   
                        <div class="column">
                          <img class="demo cursor" src="{{ get_image_url($pdetails->image,'project') }}"  onclick="currentSlide(1)" alt="The Woods">
                        </div>
                       <?php $i=2; ?>
                        @foreach($pimages as $pimage)    
                        <div class="column">
                          <img class="demo cursor" src="{{get_project_image_url_additional($pimage->image)}}"  onclick="currentSlide({{$i}})" alt="Cinque Terre">
                        </div>
                        <?php $i++; ?> 
                       @endforeach
                   </div>
                   </div>
                 
                 
                  </div>
                </div>
           
       </div> 
       <div class="col-4">
           
           <div class="card card-primary">
               <div class="card-body">
                   <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                       <b>Numbers</b> <a class="float-right">{{$pdetails->numbers}}</a>
                     </li>
                     <li class="list-group-item">
                       <b>Risk</b> <a class="float-right">{{$pdetails->risk}}</a>
                     </li>
                     <li class="list-group-item">
                       <b>Returns</b> <a class="float-right">{{$pdetails->projected_returns}}</a>
                     </li>
                     <li class="list-group-item">
                       <b>Purchase Price</b> <a class="float-right">{{$pdetails->purchase_price}}</a>
                     </li>
                      <li class="list-group-item">
                       <b>Projected Project Cost</b> <a class="float-right">{{$pdetails->projected_cost}}</a>
                     </li>
                      <li class="list-group-item">
                       <b>Projected Timeline</b> <a class="float-right">{{$pdetails->projected_timeline}}</a>
                     </li>
                      <li class="list-group-item">
                       <b>Projected Sale Price</b> <a class="float-right">{{$pdetails->sale_price}}</a>
                     </li>
                      <li class="list-group-item">
                       <b>Projected Net Profit</b> <a class="float-right">{{$pdetails->net_profit}}</a>
                     </li>
                   </ul>
               </div>
           </div>
             @if($case->case_file!="") 
            <div class="card card-primary">
               <div class="card-body">
                 <b>{{$case->case_title}}</b>  
                <a href="{{ get_file_path($case->case_file,'cases') }}" target="_blank"><button type="button" class="btn btn-block btn-success btn-flat btn-sm">Download Case Study</button></a>
 
             </div>
           </div>       
           @endif 
       </div> 
        
        
      
        
           
       </div>   

     
       
    
      
      
      
  
   </section> 

<div class="modal" id="interestedModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Invest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Great! Request to invest by entering your amount below and we'll take the next steps</label>
        <input type="number" class="form-control" name="invest_amount" id="invest_amount" placeholder="" required>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" id="terms-conditions" type="checkbox">
          <label class="form-check-label">Please accept our <a href="#">Terms & Conditions.</a></label>
        </div>
        
      </div>
        
      <div class="form-group">
         <input type="hidden" name="invest_user_id" id="invest_user_id" value=""> 
         <input type="hidden" name="invest_project_id" id="invest_project_id" value=""> 
         <button type="button" class="btn btn-primary investFormButton">Submit</button>
      </div>

      </div>
     
    </div>
  </div>
</div>
    
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>  
  </div>
@endsection