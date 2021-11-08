@extends('layouts.app')

@section('content')


<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
           <li class="breadcrumb-item"><a href="/entrance_upload">Entrance Upload</a></li>
          <li class="breadcrumb-item active" aria-current="page">NEET-XI</li>
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
               
                <br>
                 <a href="/products" class="btn btn-primary">Recently Uploaded Questions</a> 
                </div>
          </div>
          <div class="col-md-10 ">
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
                
                
                <!--<div class="row ">-->
                <!--    <div class="col-sm-2" style="display:none">-->
                <!--    <div class="btn-group btn-group-inline m-2">-->
                <!--        <div class="form-group ">  -->
                <!--        <h5 class="card-title">Examination</h5>-->
                <!--        <select class="form-control"  name="exam" id="exampleFormControlSelect1">-->
                <!--        <option value="NEET" selected >NEET</option>         -->
                <!--        </select>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    </div>-->

                <!--    <div class="col-sm-1">-->
                <!--    <div class="btn-group btn-group-inline mt-2" >-->
                <!--        <div class="form-group ">   -->
                <!--        <h5 class="card-title">Standard</h5>-->
                <!--        <select class="form-control" name="standard" id="exampleFormControlSelect1">-->
                <!--        <option value="XI" selected >XI</option>         -->
                <!--        </select>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    </div>-->


                <!--    <div class="col-sm-2">-->
                <!--    <div class="btn-group btn-group-inline mt-2">-->
                <!--            <div class="form-group "> -->
                <!--            <h5 class="card-title">Subject</h5>-->
                <!--    <select class="form-control" name="subject" id="subject">-->
                <!--        <option value="BIOLOGY">BIOLOGY</option>-->
                <!--    </select>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--    </div>-->
                
                <!--    <div class="col-sm-2">-->
                <!--    <div class="btn-group btn-group-inline mt-2">-->
                <!--            <div class="form-group "> -->
                <!--            <h5 class="card-title">Publication</h5>-->
                <!--    <select class="form-control" name="publication" id="publication">-->
                <!--        <option value="MTG PUBLICATION">MTG PUBLICATION </option>-->
                <!--    </select>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--    </div>-->

                <!--    <div class="col-sm-3">-->
                <!--    <div class="btn-group btn-group-inline mt-2">-->
                <!--            <div class="form-group ">-->
                <!--                <h5 class="card-title">Chapter</h5>-->
                <!--    <select class="form-control" name="chapter" id="chapter">-->
                      
                <!--        <option value="1.The Living World">1.The Living World</option>-->
                <!--        <option value="2.Biological Classification">2.Biological Classification</option>-->
                <!--        <option value="3.Plant Kingdom">3.Plant Kingdom</option>-->
                <!--        <option value="4.Animal Kingdom">4.Animal Kingdom</option>-->
                <!--        <option value="5.Morphology of Flowering Plants">5.Morphology of Flowering Plants</option>-->
                <!--        <option value="6.Anatomy of Flowering Plants">6.Anatomy of Flowering Plants</option>-->
                <!--        <option value="7.Structural Organisation in Animals">7.Structural Organisation in Animals</option>-->
                <!--        <option value="8.Cell:The Unit of Life">8.Cell:The Unit of Life</option>-->
                <!--        <option value="9.Biomolecules">9.Biomolecules</option>-->
                <!--        <option value="10.Cell Cycle and Cell Division">10.Cell Cycle and Cell Division</option>-->
                        
                <!--        <option value="11.Transport in Plants">11.Transport in Plants</option>-->
                <!--         <option value="12.Mineral Nutrition">12.Mineral Nutrition</option>-->
                <!--          <option value="13.Photosynthesis in Higher Plants">13.Photosynthesis in Higher Plants</option>-->
                <!--          <option value="14.Respiration in Plants">14.Respiration in Plants</option>-->
                <!--           <option value="15.Plant Growth and Development">15.Plant Growth and Development</option>-->
                <!--            <option value="16.Digestion and Absorption">16.Digestion and Absorption</option>-->
                <!--             <option value="17.Breathing and Exchange of Gases">17.Breathing and Exchange of Gases</option>-->
                <!--              <option value="18.Body Fluids and Circulation">18.Body Fluids and Circulation</option>-->
                <!--               <option value="19.Excretory Products and their Elimination">19.Excretory Products and their Elimination</option>-->
                <!--                <option value="20.Locomotion and Movement">20.Locomotion and Movement</option>-->
                <!--                 <option value="21.Neural Control and Coordination">21.Neural Control and Coordination</option>-->
                <!--                  <option value="22.Chemical Coordination and Integration">22.Chemical Coordination and Integration</option>-->
                        
                       

                        
                <!--    </select>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--    </div>-->

                <!--    <div class="col-sm-2">-->
                <!--    <div class="btn-group btn-group-inline mt-2 ">-->
                <!--        <div class="form-group ">-->
                <!--        <h5 class="card-title">Level</h5>-->
                <!--            <select class="form-control" name="level" id="exampleFormControlSelect1">-->
                            <!--<option selected disabled>Select Level</option>-->
                <!--            <option>Standard</option>-->
                <!--            <option>Higher</option>                 -->
                <!--            </select>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div> -->
                
                <div class="row ">
                    <div class="col-sm-2" style="display:none">
                    <div class="btn-group btn-group-inline m-2">
                        <div class="form-group ">  
                        <h5 class="card-title">Examination</h5>
                        <select class="form-control"  name="exam" id="exampleFormControlSelect1">
                        <option value="NEET" selected >NEET</option>         
                        </select>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-1">
                    <div class="btn-group btn-group-inline mt-2" >
                        <div class="form-group ">   
                        <h5 class="card-title">Standard</h5>
                        <select class="form-control" name="standard" id="exampleFormControlSelect1">
                        <option value="XI" selected >XI</option>         
                        </select>
                        </div>
                    </div>
                    </div>


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
                    <div class="col ">
                        <div class="card h-100 shadow p-1 mb-1 bg-white rounded">
                        
                        <div class="card-body">
                            <h5 class="card-title">Question</h5>
                            <input type="file" name="question" class="form-control-file" placeholder="Upload Question">
                        </div>
                        
                        </div>
                    </div>
                    <div class="col ">
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
                    <div class="col ">
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
    "CENGAGE PUBLICATION": ["1. Unit, Dimension and Error Analysis", "2. Vetors", "3. General Kinematics and Motion in One Dimension", "4. Motion in Two Dimensions", "5. Newtons Laws of Motion", "6. Work , Energy, Power & Collision", "7. Rotational Dynamics", "8. Gravitation", "9.Properties of Matter (Elasticity, Surface Tension and Viscosity)", "10. Fluid Mechanics (Real Fluids)", "11. Thermal Properties of Matter and Transmission of Heat", "12. Kinetic Theory of Gases & Thermodynamics", "13. Oscillations and SImple Harmonic Motion", "14. Waves and Acoustics"],
    
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
    "PYQS": ["Variables", "Operators", "Functions", "Conditions"]    
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

    "PYQS": ["Variables", "Operators", "Functions", "Conditions"]   
  },

  "BIOLOGY": {
    "MARVEL PUBLICATION": ["Variables", "Strings", "Arrays"],
    "MTG PUBLICATION": ["1.The Living World",
"2.Biological Classification",
"3.Plant Kingdom",
"4.Animal Kingdom",
"5.Morphology of Flowering Plants",
"6.Anatomy of Flowering Plants",
"7.Structural Organisation in Animals",
"8.Cell:The Unit of Life",
"9.Biomolecules",
"10.Cell Cycle and Cell Division",
"11.Transport in Plants",
"12.Mineral Nutrition",
"13.Photosynthesis in Higher Plants",
"14.Respiration in Plants",
"15.Plant Growth and Development",
"16.Digestion and Absorption",
"17.Breathing and Exchange of Gases",
"18.Body Fluids and Circulation",
"19.Excretory Products and their Elimination",
"20.Locomotion and Movement",
"21.Neural Control and Coordination",
"22.Chemical Coordination and Integration"],
    "PYQS": ["Variables", "Operators", "Functions", "Conditions"]   
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
