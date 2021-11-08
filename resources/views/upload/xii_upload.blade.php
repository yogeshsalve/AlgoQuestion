@extends('layouts.app')

@section('content')


<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>         
          <li class="breadcrumb-item active" aria-current="page">XII Upload</li>
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
               
                </div>
          </div>
          <div class="col-md-10 ">
            <div class="card" >
              <div class="card-header text-white bg-primary">
              Standard XII 
              </div>
  
            
              <div class="card-body">
              @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h6>{{ $message }}</h6>
        </div>
    @endif 
    <!-- ----- -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    


    <form action="/xii_upload" method="POST" enctype="multipart/form-data"> 
        @csrf

            <div class="row ">
              <div class="col-sm-2 ">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group ">   
                   
                    <input type="text" class="form-control" readonly name="standard" value="XII" id="standard">
                  </div>
                </div>
              </div>

              <div class="col-sm-2 ">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group "> 
                    
                    <select class="form-control" name="subject" id="subject">
                        <option value="" selected="selected" disabled>Select Subject</option>
                    </select>
                  </div>
                </div>
              </div>
                
              <div class="col-sm-2">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group "> 
                   
                    <select class="form-control" name="chapter" id="publication">
                        <option value="" selected="selected" >Please Select Subject </option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-4" style="display:none">
              <div class="btn-group btn-group-inline mt-2">
                      <div class="form-group ">
                          <h5 class="card-title">extra</h5>
              <select class="form-control" name="chapter1" id="chapter">
                  <option value="" selected="selected" disabled>Please Select Publication</option>
              </select>
              </div>
              </div>
              </div>
            
            </div> 
            
            <div class="mb-3">
              
              <textarea class="form-control" name="question" id="exampleFormControlInput1" placeholder="Enter Your Question Here" rows="2"></textarea>
            </div>
            <div class="row">
              <div class="col mb-4">
                <label for="exampleFormControlTextarea1" class="form-label">Answer</label>
                <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
             
              <div class="col">
                <div class="card h-100 shadow p-1 mb-1 bg-white rounded">                        
                  <div class="card-body">
                      <h5 class="card-title">Image (If Any)</h5>
                      <input type="file" name="otherimage" class="form-control-file" placeholder="Image">
                  </div>                        
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Upload Questions</button>
            
          </div>






            
        


         

       
        </form>
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
var subjectObject = {
    "MARATHI": {
    "sample 1": ["1", "2", "3 "],
    "sample 2": ["1", "2", "3 "],    
  },

  "ENGLISH": {
    "sample1": ["1", "2", "3 "],
    "sample2": ["1", "2", "3 "],
   
  },

  "HINDI": {
    "sample1": ["1", "2", "3 "],
    "sample2": ["1", "2", "3 "],
   },

  "SANSKRIT": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "HISTORY": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "POLITICAL SCIENCE": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "GEOGRAPHY": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "MATHS I": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "MATHS II": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "SCIENCE": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("publication");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>

@endsection
