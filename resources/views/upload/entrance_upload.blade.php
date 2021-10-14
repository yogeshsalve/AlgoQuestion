@extends('layouts.app')

@section('content')





<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Upload Questions</li>
        </ol>
      </nav>
      <div class="card-body">
        <div class="row" >
          <div class = "col-md-2 ">
            <div class="card">
            <ul class="list-group">
              <a href= "/home"><li class="list-group-item">Dashboard</li></a>
              <li class="list-group-item" aria-current="true" data-toggle="tooltip" data-placement="top" title="Go on Dashboard to Create Paper">Create Paper</li>
              <li class="list-group-item">View Paper</li>
              <li class="list-group-item">Questionn Bank</li>
              <li class="list-group-item">Blueprint</li>
            </ul>
            <br>
            <a href="/products" class="btn btn-primary">Recently Uploaded Questions</a> 
            </div>
          </div>
          
          
          
          <div class="col-md-6">
            <div class="card " >
              <div class="card-header text-white bg-primary mb-3">Upload Questions</div>
              <div class="card-body">

                    <!-- ----- -->
                    
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Choose Exam</h5>
                                  
                                    <button class="tablink btn btn-primary" onclick="openPage('NEET', this, 'blue')"id="defaultOpen">NEET</button>
                                    <button class="tablink btn btn-primary" onclick="openPage('JEE', this, 'blue')" >JEE</button>
                                    <button class="tablink btn btn-primary" onclick="openPage('MHT-CET', this, 'blue')">MHT-CET</button>
                    
                                                
                                    <div id="NEET" class="tabcontent">
                                      <br>
                                      <h3>Hey Admin, You have Selected : <span class="blink text-success"><b>NEET</b></span></h3>
                                      <h4>Please select standard to proceed</h4>
                                      <div class="btn-group">
                                        <a href= "/NEET-XI"><button class="m-2 btn btn-outline-success">CLass XI</button></a>
                                        <a href= "/NEET-XII"><button class="m-2 btn btn-outline-success">Class XII</button></a>   
                                      </div>
                                    </div>
                    
                                    <div id="JEE" class="tabcontent">
                                      <br>
                                      <h3>Hey Admin, You have Selected :  <span class="blink text-success"><b>JEE</b></span></h3>
                                      <h4>Please select standard to proceed</h4>
                                      <div class="btn-group">
                                      <a href= "/JEE-XI"><button class="m-2 btn btn-outline-success">Class XI</button></a>
                                      <a href= "/JEE-XII"><button class="m-2 btn btn-outline-success">Class XII</button></a>    
                                      </div>
                                    </div>
                    
                                    <div id="MHT-CET" class="tabcontent">
                                      <br>
                                      <h3>Hey Admin, You have Selected : <span class="blink text-success"><b>MHT-CET</b></span></h3>
                                      <h4>Please select standard to proceed</h4>
                                      <div class="btn-group">
                                      <a href= "/CET-XI"><button class="m-2 btn btn-outline-success">CLass XI</button></a>
                                      <a href= "/CET-XII"><button class="m-2 btn btn-outline-success">Class XII</button></a>                    
                                      </div>
                                    </div>
                   
                  </div>
                </div>
                 <!-- ----- -->
              </div>
           </div>
            </div>
            
            
            <div class = "col-md-4 ">
            <div class="card">
            <div class="card-header text-white bg-primary mb-3">Entrance Exams</div>
            
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <center><img src="images/neetlogo.png" width="300" height="300" alt="..."></center>
    </div>
    <div class="carousel-item">
      <center><img src="images/jeelogo.jpg"  width="300" height="300" alt="..."></center>
    </div>
    <div class="carousel-item">
      <center><img src="images/mhtcet.webp" width="300" height="300" alt="..."></center>
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

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>





    
  
<script>
    function blink_text() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
    
}
setInterval(blink_text, 1000);
</script>                    
         
       

    

@endsection
