@extends('layouts.app')

@section('content')

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<!-- <div class="container"> -->
    <div class="row justify-content-center m-2">
        <div class="col-md-12 ">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>    
  </ol>
</nav>

                <div class="card-body">
                <div class="row" >
                    <div class = "col-md-2 "><div class="card">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <!-- <div class="card-body"> -->
  <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Dashboard</li>
  <a href="/create_paper"><li class="list-group-item text-dark">Create Paper</li></a>
  <li class="list-group-item">View Paper</li>
   <!--<a href="/upload" ><li class="list-group-item text-dark">Upload Questions</li></a>-->
  <li class="list-group-item">Questionn Bank</li>
  <li class="list-group-item">Blueprint</li>
</ul>
<br>
    <a href="/upload" class="btn btn-primary">Upload Question</a>
  <!-- </div> -->
</div></div>




                    <div class = "col-md-10 ">

  <!--<div class="card-body">-->


<!-- second card start-->
<div class="card shadow p-1 mb-1 bg-white rounded">
  <div class="card-header text-white bg-primary">
    Generate New Question Paper
  </div>
  <div class="card-body">
  <a href= "/create_paper"><button type="button" class="btn btn-primary" >Start </button></a>




<!--for demo button-->

<a href="#" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/BLF7X2K4dOE" data-target="#video_pop"><button type="button" class="btn btn-outline-secondary">Demo</button></a>
<!-- POPUP -->
 <div class="modal fade" id="video_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-body">        
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>        
                   <!-- 16:9 aspect ratio -->
                   <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always"></iframe>
                   </div>                
             </div>        
           </div>
         </div>
   </div>

<script>
    $(document).ready(function() {  
     // Gets the video src from the data-src on each button    
     var $videoSrc;  
     $('.video-btn').click(function() {
       $videoSrc = $(this).data( "src" );      
     });
     //console.log($videoSrc);  
       
     // when the modal is opened autoplay it  
     $('#video_pop').on('shown.bs.modal', function (e) {
       
     // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
     $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
     })
       // stop playing the youtube video when I close the modal
     $('#video_pop').on('hide.bs.modal', function (e) {
       $("#video").attr('src',$videoSrc); 
     }) 
   
    }); 
</script>


<!--for demo button-->


<button type="button" class="btn btn-outline-success">Buy</button>
    
  </div>
</div>
<!-- second card ends -->

<!-- third card starts -->
<div class="card shadow p-1 mb-2 bg-white rounded">
  <div class="card-header">
    Exams
  </div>
  <div class="card-body">
  <div class="row row-cols-1 row-cols-md-6 g-4">
      
  <a href="/create_paper"><div class="col">
    <div class="card shadow  mb-1 bg-white rounded">
      <img src="images/cp1.png" class="card-img-top p-3" alt="..." >
          <div class="card-footer">
          <h6 class="text-muted"><center>Create Paper</center></h6>
          </div>
    </div>
  </div></a>
  
  <div class="col">
    <div class="card shadow  mb-1 bg-white rounded">
    <img src="images/cp2.png" class="card-img-top  p-3" alt="..."  >
      <div class="card-footer">
      <h6 class="text-muted "><center>View Papers</center></h6>
    </div>
    </div>
  </div>
  
  <a href="/products"><div class="col">
    <div class="card shadow  mb-1 bg-white rounded">
    <img src="images/cp3.png" class="card-img-top  p-3" alt="..." >      
    <div class="card-footer">
      <h6 class="text-muted"><center>Question Bank</center></h6>
    </div>
    </div>
  </div></a>
  
  <div class="col">
    <div class="card shadow  mb-1 bg-white rounded">
    <img src="images/cp3.png" class="card-img-top  p-3" alt="..." >      
    <div class="card-footer">
      <h6 class="text-muted"><center>Blueprints</center></h6>
    </div>
    </div>
  </div> 

</div>
</div>
<!-- third card end -->



    
  </div>
</div></div>
</div>
                
            </div>
       
    </div>

@endsection
