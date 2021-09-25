@extends('layouts.app')

@section('content')

<!-- <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

/* #Home {background-color: red;}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;} */
</style> -->



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
            <a href="" class="btn btn-primary">Upload Questions</a> 
            </div>
          </div>
          <div class="col-md-10">
            <div class="card " >
              <div class="card-header text-white bg-primary mb-3">Header</div>
              <div class="card-body">

<!-- ----- -->
                <h4>Choose Exam</h4>
                <button class="tablink" onclick="openPage('NEET', this, 'blue')"id="defaultOpen">NEET</button>
                <button class="tablink" onclick="openPage('JEE', this, 'blue')" >JEE</button>
                <button class="tablink" onclick="openPage('MHT-CET', this, 'blue')">MHT-CET</button>

                            
                <div id="NEET" class="tabcontent">
                  <br>
                  <p>You have Selected : NEET</p>
                  <h4>Please select standard to proceed</h4>
                  <div class="btn-group">
                    <a href= "/NEET-XI"><button class="m-2">CLass XI</button></a>
                    <a href= "/NEET-XII"><button class="m-2">Class XII</button></a>   
                  </div>
                </div>

                <div id="JEE" class="tabcontent">
                  <br>
                  <p>You have Selected : JEE</p>
                  <h4>Please select standard to proceed</h4>
                  <div class="btn-group">
                  <a href= "/JEE-XI"><button class="m-2">CLass XI</button></a>
                  <a href= "/JEE-XII"><button class="m-2">Class XII</button></a>    
                  </div>
                </div>

                <div id="MHT-CET" class="tabcontent">
                  <br>
                  <p>You have Selected : MHT-CET</p>
                  <h4>Please select standard to proceed</h4>
                  <div class="btn-group">
                  <a href= "/CET-XI"><button class="m-2">CLass XI</button></a>
                  <a href= "/CET-XII"><button class="m-2">Class XII</button></a>                    
                  </div>
                </div>
<!-- ----- -->
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




<!-- section start -->
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<!-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif  -->
<!-- <br>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> 
@csrf
<div class="row justify-content-between g-3">
  <div class="col-auto">  
  <div class="btn-group btn-group-inline">
  <div class="form-group">
           
            <select class="form-control" name="exam" id="exam">
            <option selected disabled>Select Exam</option>
            <option value ="1">NEET</option>
            <option value ="2">JEE</option> 
            <option value ="3">MHT-CET</option>                  
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
          <div class="form-group">
            
            <select class="form-control" name="subject" id="subject">
            <option selected disabled>Subject</option>
            <option value="1">physics</option>
            <option value="1">Chemistry</option>   
            <option value="1">Biology</option>      
            <option value="2">physics</option>
            <option value="2">Chemistry</option>   
            <option value="2">Mathematics</option>  
            <option value="3">physics</option>
            <option value="3">Chemistry</option>   
            <option value="3">Mathematics</option>    
            <option value="3">Biology</option>   
            
            </select>
          </div>
</div>


<div class="btn-group btn-group-inline">
  <div class="form-group">
           
            <select class="form-control" name="exam" id="exam">
            <option selected disabled>Publication</option>
            <option value ="1">abc</option>
            <option value ="2">Navneet</option> 
            <option value ="3">MTG</option>                  
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
<div class="form-group">
            
            <select class="form-control" name="standard" id="exampleFormControlSelect1">
            <option selected disabled>Select Standard</option>
            <option>XI</option>
            <option>XII</option>                 
            </select>
          </div>
</div>



<div class="btn-group btn-group-inline">
          <div class="form-group">
            
            <select class="form-control" name="chapter" id="exampleFormControlSelect1">
            <option selected disabled>Select Chapter</option>
            <option>1</option>
            <option>2</option>                 
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
          <div class="form-group">
           
            <select class="form-control" name="level" id="exampleFormControlSelect1">
            <option selected disabled>Select Level</option>
            <option>Easy</option>
            <option>Hard</option>                 
            </select>
          </div>
</div>
  </div>  
</div>
<hr> -->
<!-- 
<div class="row">

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>QUESTION</strong></h5>
        <div class="form-group">
               
                <input type="file" name="question" class="form-control-file" placeholder="Upload Question">
               
            </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>ANSWER</strong></h5>
        <div class="form-group">        
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Answer</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>      
            </select>
        </div>     
       
        
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>HINT</strong></h5>
        <div class="form-group">
                
                <input type="file" name="hint" class="form-control-file" placeholder="Hint">
            </div>
      </div>
    </div>          
  </div>
  <hr>
  
</div>   -->
<!-- <div class= "text-center">
    <button type="submit" class="btn btn-primary m-2">Upload Question</button>   
    </div> -->
<!-- </form>

</div>
</div> -->
<!-- //section end----------- -->
    
  
                    
         
       

    

@endsection
