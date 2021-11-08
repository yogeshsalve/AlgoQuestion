@extends('layouts.app')

@section('content')


<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/entrance_upload">Entrance Upload</a></li>
          <li class="breadcrumb-item active" aria-current="page">NEET-XII</li>
        </ol>
      </nav>
      <div class="card-body">
        <div class="row" >
          <div class = "col-md-2 ">
            <div class="card">
                <ul class="list-group">
                <a href= "/home"><li class="list-group-item">Dashboard</li></a>
                <li class="list-group-item list-group-item-secondary" aria-current="true" data-toggle="tooltip" data-placement="top" title="Go on Dashboard to Create Paper ">Create Paper</li>
                <li class="list-group-item list-group-item-secondary">View Paper</li>
                <li class="list-group-item list-group-item-secondary">Questionn Bank</li>
                <li class="list-group-item list-group-item-secondary">Blueprint</li>
                </ul>
                <br>
                <!--<a href="/entrance_upload" class="btn btn-primary">Upload Questions</a> <br>-->
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



        <form action="/NEET-XII" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row justify-content-justify g-3">
        <div class="col-auto">  

            <div class="alert alert-info border border-secondary" role="alert">
                <div class="row">
                     <div class="col-sm-2" style="display:none">
                        <div class="btn-group btn-group-inline m-2">
                            <div class="form-group"> 
                            <h5 class="card-title">Examination</h5>
                            <select class="form-control" name="exam" id="exampleFormControlSelect1">
                            <option value="NEET" selected >NEET</option>         
                            </select>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-1">
                    <div class="btn-group btn-group-inline m-2">
                        <div class="form-group ">  
                        <h5 class="card-title">Standard</h5>
                        <select class="form-control" name="standard" id="exampleFormControlSelect1">
                        <option value="XII" selected >XII</option>         
                        </select>
                        </div>
                    </div>
                    </div>



                    <div class="col-sm-2">
                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Subject</h5>
                    <select class="form-control" name="subject" id="subject">
                        <option value="" selected="selected" disabled>Select Subject</option>
                    </select>
                    </div>
                    </div>
                    </div>
                
                    <div class="col-sm-3">
                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group "> 
                            <h5 class="card-title">Publication</h5>
                    <select class="form-control" name="publication" id="publication">
                        <option value="" selected="selected" disabled>Please Select Subject </option>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="col-sm-3">
                    <div class="btn-group btn-group-inline m-2">
                            <div class="form-group ">
                                <h5 class="card-title">Chapter</h5>
                    <select class="form-control" name="chapter" id="chapter">
                        <option value="" selected="selected" disabled>Please Select Publication</option>
                    </select>
                    </div>
                    </div>
                    </div>





                    <div class="col-sm-3">
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
    "CENGAGE PUBLICATION": ["1.Electric Charge, Field and Flux",
    "2.Electric Potential and Capacitance",
    "3.Current Electricity",
    "4.Source and Effect of Magnetic Field",
    "5.Magnetism and Matter",
    "6.Electromagnetic Induction",
    "7.Alternating Current",
    "8.Geometrical Optics",
    "9.Wave Optics",
    "10.Dual Nature of Radiations and Matter",
    "11.Atomic Physics",
    "12.Nuclear Physics",
    "13.Semiconductor Electronics:Materials, Devices and Simple Circuits",
    "14.Electromagnetic Waves and Communication System"],

    "MTG PUBLICATION": ["1.Electric Charges and Fields",
    "2.Electrostatic Potential and Capacitance",
    "3.Current Electricity",
    "4.Moving Charges and Magnetism",
    "5.Magnetism and Matter",
    "6.Electromagnetic Induction",
    "7.Alternating Current",
    "8.Electromagnetic Waves",
    "9.Ray Optics and Optical Instruments",
    "10.Wave Optics",
    "11.Dual Nature of Radiation and Matter",
    "12.Atoms",
    "13.Nuclei",
    "14.Semiconductor Electronics: Materials, Devices and Simple Circuits",
    "15.Communication Systems"],

    "PYQS ": ["Variables", "Operators", "Functions", "Conditions"]    
  },
  
  "CHEMISTRY": {
    "MARVEL PUBLICATION": ["Variables", "Strings", "Arrays"],
    
    "MTG PUBLICATION": ["1. The Solid State",
    "2. Solutions", 
    "3. Electrochemistry",
    "4. Chemical Kinetics",
    "5. Surface Chemistry",
    "6. General Properties and Processes of Isolation of Elements",
    "7. The p-Block Elements",
    "8. The d- and f-Block Elements",
    "9. Coordination Compounds",
    "10. Haloalkanes and Haloarenes",
    "11. Alcohols, Phenols and Ethers",
    "12. Aldehydes, Ketones and Carboxylic Acids",
    "13. Amines",
    "14. Biomolecules",
    "15. Polymers",
    "16. Chemistry in Everyday Life"],

    "PYQS PUBLICATION": ["Variables", "Operators", "Functions", "Conditions"]   
  },

  "BIOLOGY": {
    "MARVEL PUBLICATION": ["Variables", "Strings", "Arrays"],
    
    "MTG PUBLICATION": ["1. Reproduction in Organisms", 
    "2. Sexual Reproduction in Flowering Plants", 
    "3. Human Reproduction", 
    "4. Reproductive Health", 
    "5. Principles of Inheritance and Variation", 
    "6. Molecular Basis of Inheritance", 
    "7. Evolution", 
    "8. Human Health & disease", 
    "9. Strategies for Enhancement in Food Production",
    "10. Microbes in Hman Welfare", 
    "11. Biotechnology: Principles and Processes", 
    "12. Biotechnology and its Applications", 
    "13. Organisms and Populations", 
    "14. Ecosystem", 
    "15. Biodiversity and Conservations", 
    "16. Environmental Issues"],
    
    "PYQS ": ["Variables", "Operators", "Functions", "Conditions"]   
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
