@extends('layouts.app')

@section('content')


<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>         
          <li class="breadcrumb-item active" aria-current="page">IX Upload</li>
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
                <a href="/upload" class="btn btn-primary">Upload Questions</a> 
                </div>
          </div>
          <div class="col-md-10">
            <div class="card " >
  
              <!-- <div class="card-header text-white bg-primary mb-3">Header</div> -->
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



        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row justify-content-justify g-3">
        <div class="col-auto">  

            <div class="alert alert-info border border-secondary" role="alert">
                
                <div class="row ">
                    <!-- <div class="col-sm-2" style="display:none">
                    <div class="btn-group btn-group-inline m-2">
                        <div class="form-group ">  
                         <select class="form-control"  name="exam" id="exampleFormControlSelect1">
                        <option value="NEET" selected >NEET</option>         
                        </select>
                        </div>
                    </div>
                    </div> -->

                    <!-- <div class="col-sm-1">
                    <div class="btn-group btn-group-inline mt-2">
                        <div class="form-group ">   
                        <h5 class="card-title">Standard</h5>
                        <select class="form-control" name="standard" id="exampleFormControlSelect1">
                        <option value="XI" selected >XI</option>         
                        </select>
                        </div>
                    </div>
                    </div> -->


                    <div class="col-sm-2">
                    <div class="btn-group btn-group-inline mt-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Subject</h5>
                    <select class="form-control" name="subject" id="subject">
                        <option value="" selected="selected" disabled>Select Subject</option>
                    </select>
                    </div>
                    </div>
                    </div>
                
                    <div class="col-sm-2">
                    <div class="btn-group btn-group-inline mt-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Publication</h5>
                    <select class="form-control" name="publication" id="publication">
                        <option value="" selected="selected" disabled>Please Select Subject </option>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="col-sm-3">
                    <div class="btn-group btn-group-inline mt-2">
                            <div class="form-group ">
                                <h5 class="card-title">Chapter</h5>
                    <select class="form-control" name="chapter" id="chapter">
                        <option value="" selected="selected" disabled>Please Select Publication</option>
                    </select>
                    </div>
                    </div>
                    </div>




                    <div class="col-sm-2">
                    <div class="btn-group btn-group-inline mt-2 ">
                        <div class="form-group ">
                        <h5 class="card-title">Level</h5>
                            <select class="form-control" name="level" id="exampleFormControlSelect1">
                            <option selected disabled>Select Level</option>
                            <option>Standard</option>
                            <option>Higher</option>                 
                            </select>
                        </div>
                    </div>
                    </div>
                </div>  
            </div>
        


            <div class="border border-secondary">

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 m-2">
                    <div class="col">
                        <div class="card h-100 shadow p-1 mb-1 bg-white rounded">
                        
                        <div class="card-body">
                            <h5 class="card-title">Question</h5>
                            <input type="file" name="question" class="form-control-file" placeholder="Upload Question">
                        </div>
                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow p-1 mb-1 bg-white rounded">
                       
                        <div class="card-body">
                            <h5 class="card-title">Answer</h5>
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
                    <div class="col">
                        <div class="card h-100 shadow p-1 mb-1 bg-white rounded">
                        
                        <div class="card-body">
                            <h5 class="card-title">Hint</h5>
                            <input type="file" name="hint" class="form-control-file" placeholder="Hint">
                        </div>
                        
                        </div>
                    </div>
                </div>
               
 
                
                <div class= "text-right m-3">
                <button type="submit" class="btn btn-primary m-2">Upload Question</button>   
                </div>
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
    "PHYSICS": {
    "MARVEL PUBLICATION": ["1. Units & Measurements", "2. Scalers & Vetors", "3. Motion in a straight light ", "4. Motion", "5. Laws of Motion & Friction", "6. Work , Energy, Power & Collision", "7. Rotational Motion", "8. Gravitation", "9.Elasticity", "10. Fluid Mechanics and Surface Tension", "11. Thermal Properties of Matter", "12. Kinetic Theory of Gases & Thermodynamics", "13. Oscillations", "14. Sound Waves and Wave Motions", "15. Stationary Waves"],
    "MTG PUBLICATION": ["Borders", "Margins", "Backgrounds", "Float"],
    "PYQS PUBLICATION": ["Variables", "Operators", "Functions", "Conditions"]    
  },
  "CHEMISTRY": {
    "MARVEL PUBLICATION": ["Variables", "Strings", "Arrays"],
    "MTG PUBLICATION": ["SELECT", "UPDATE", "DELETE"],
    "PYQS PUBLICATION": ["Variables", "Operators", "Functions", "Conditions"]   
  },

  "BIOLOGY": {
    "MARVEL PUBLICATION": ["Variables", "Strings", "Arrays"],
    "MTG PUBLICATION": ["SELECT", "UPDATE", "DELETE"],
    "PYQS PUBLICATION": ["Variables", "Operators", "Functions", "Conditions"]   
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
