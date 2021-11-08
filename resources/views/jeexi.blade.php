@extends('layouts.app')

@section('content')


<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
           <li class="breadcrumb-item"><a href="/entrance_upload">Entrance Upload</a></li>
          <li class="breadcrumb-item active" aria-current="page">JEE-XI</li>
        </ol>
      </nav>
      <div class="card-body">
        <div class="row" >
          <div class = "col-md-2 ">
            <div class="card">
                <ul class="list-group">
                <a href= "/home"><li class="list-group-item">Dashboard</li></a>
                <li class="list-group-item list-group-item-secondary" aria-current="true" data-toggle="tooltip" data-placement="top" title="Go on Dashboard to Create Paper">Create Paper</li>
                <li class="list-group-item list-group-item-secondary">View Paper</li>
                <li class="list-group-item list-group-item-secondary">Questionn Bank</li>
                <li class="list-group-item list-group-item-secondary">Blueprint</li>
                </ul>
                <!--<br>-->
                <!--<a href="/upload" class="btn btn-primary">Upload Questions</a> -->
                <br>
                 <a href="/products" class="btn btn-primary">Recently Uploaded Questions</a> 
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



        <form action="/JEE-XI" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row justify-content-justify g-3">
        <div class="col-auto">  

            <div class="alert alert-info border border-secondary" role="alert">
                <div class="row">
                    <div class="btn-group btn-group-inline m-2" style="display:none">
                        <div class="form-group "> 
                        <h5 class="card-title">Examination</h5>
                        <select class="form-control" name="exam" id="exampleFormControlSelect1">
                        <option value="JEE" selected >JEE</option>         
                        </select>
                        </div>
                    </div>

                    <div class="btn-group btn-group-inline m-2">
                        <div class="form-group ">  
                        <h5 class="card-title">Standard</h5>
                        <select class="form-control" name="standard" id="exampleFormControlSelect1">
                        <option value="XI" selected >XI</option>         
                        </select>
                        </div>
                    </div>




                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Subject</h5>
                    <select class="form-control" name="subject" id="subject">
                        <option value="" selected="selected" disabled>Select Subject</option>
                    </select>
                    </div>
                    </div>
                
                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Publication</h5>
                    <select class="form-control" name="publication" id="publication">
                        <option value="" selected="selected" disabled>Please Select Subject </option>
                    </select>
                    </div>
                    </div>

                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group ">
                                <h5 class="card-title">Chapter</h5>
                    <select class="form-control" name="chapter" id="chapter">
                        <option value="" selected="selected" disabled>Please Select Publication</option>
                    </select>
                    </div>
                    </div>






                    <div class="btn-group btn-group-inline m-2 ">
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
                <button type="submit" class="btn btn-primary m-2">Upload </button>   
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
    
    "MTG PUBLICATION": ["1.Physical World",
    "2.Units and measurements",
    "3.Motion in a straight line", 
    "4.Motion in a plane",
    "5.Laws of Motion",
    "6.Work Energy power",
    "7.System of particles and rotational motion",
    "8.Gravitation",
    "9.Mechanical properties of solids",
    "10.Mechanical properties of fluids",
    "11.Thermal properties of Matter",
    "12.Thermodynamics",
    "13.Kinetic Theory",
    "14.Oscillations",
    "15.Waves"],
    
    "PYQS PUBLICATION": ["chapter", "chapter", "chapter", "chapter"]    
  },
   "CHEMISTRY": {
    "MARVEL PUBLICATION": ["1.Some Basic Concepts of Chemistry",
"2.States Of Matter:Gases, Liquids and Solids",
"3.Atomic Structure",
"4.Chemical Bonding and Molecular Structure",
"5.Chemical Thermodynamics",
"6.Solutions",
"7.Equilibrium",
"8.Redox Reaction and Electrochemistry",
"9.Chemical Kinetics",
"10.Surface Chemistry",
"11.Classification of Elements and Periodicity in Properties",
"12.General Principles and Processes of Isolation of Metals",
"13.Hydrogen",
"14.'s' Block Elements",
"15.'p' Block Elements",
"16.d & f - Block Elements",
"17.Co-Ordination Compounds",
"18.Enviromental Chemistry"],

    "MTG PUBLICATION": ["1. Some Basic Concepts of Chemistry","2. Structure of Atom","3. Classification of Elements and Periodicity in Properties","4. Chemical Bonding & Molecular Structure","5. States of Matter","6. Thermodynamics","7. Equilibrium","8. Redox Reactions","9. Hydrogen","10. The s-Block Elements","11. The p-Block Elements","12. Organic Chemistry- Some Basic Principles and Techniques","13. Hydrocarbons","14. Enviromental Chemistry"],

    "PYQS PUBLICATION": ["chapter", "chapter", "chapter", "chapter"]   
  },

  "MATHEMATICS": {
    "MARVEL PUBLICATION": ["chapter", "chapter", "chapter"],
    "MTG PUBLICATION": ["1. Sets",
"2. Relations and Functions",
"3. Trigonomatric Functions",
"4. Principle of Mathematical Induction",
"5. Complex Numbers & Quadratic Equations",
"6. Linear Inequalities",
"7. Permutations and Combinations",
"8. Binomial Theorem ",
"9. Sequences and Series",
"10. Straight Lines",
"11. Conic Sections",
"12. Introduction to Three Dimensional Geometry",
"13. Limits and Derivatives",
"14. Mathematical Reasoning",
"15. Statistics",
"16. Probability"],
    "PYQS PUBLICATION": ["chapter", "chapter", "chapter", "chapter"]   
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
