@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
            var subjectObject = {
              "PHYSICS": {
                "CENGAGE PUBLICATION": ["1. Units & Measurements", "2. Scalers & Vetors",],
                "MTG PUBLICATION": ["Borders", "Margins", "Backgrounds", "Float"],
                "PYQS": ["Variables", "Operators", "Functions", "Conditions"]    
              },
              "CHEMISTRY": {
                "PHP": ["Variables", "Strings", "Arrays"],
                "SQL": ["SELECT", "UPDATE", "DELETE"]
              },
               "BIOLOGY": {
                "CENGAGE PUBLICATION": ["1. Units & Measurements", "2. Scalers & Vetors",],
                "MTG PUBLICATION": ["Variables", "Strings", "Arrays"],
                
              } 
            }
            window.onload = function() {
              var subjectSel = document.getElementById("subject");
              var topicSel = document.getElementById("topic");
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
                var x = document.getElementById("topic").value;
                var P = document.getElementById("subject").value;
              //document.getElementById("demo").innerHTML = "You selected1: " + x;
              //document.getElementById("name").style.visibility = 'visible'; 
            
              if(x=="CENGAGE PUBLICATION" && P=="PHYSICS"){
                //document.getElementById("demo2").innerHTML = "Great Success";
                document.getElementById("pub1").style.display='block';
                document.getElementById("pub2").style.display='none'; 
                document.getElementById("pub3").style.display='none'; 
                document.getElementById("bpub1").style.display='none';
                document.getElementById("bpub2").style.display='none';
                document.getElementById("bpub3").style.display='none';
              }
              else if(x=="MTG PUBLICATION" && P=="PHYSICS"){
              document.getElementById("pub2").style.display='block';
              document.getElementById("pub3").style.display='none'; 
              document.getElementById("pub1").style.display='none'; 
              document.getElementById("bpub1").style.display='none';
              document.getElementById("bpub2").style.display='none';
              document.getElementById("bpub3").style.display='none';
              }
              else if(x=="PYQS" && P=="PHYSICS"){
              document.getElementById("pub3").style.display='block';
              document.getElementById("pub1").style.display='none'; 
              document.getElementById("pub2").style.display='none'; 
              document.getElementById("bpub1").style.display='none';
              document.getElementById("bpub2").style.display='none';
              document.getElementById("bpub3").style.display='none';
              }
              
              else if(x=="MTG PUBLICATION" && P=="BIOLOGY"){
              document.getElementById("pub1").style.display='none'; 
              document.getElementById("pub2").style.display='none'; 
              document.getElementById("pub3").style.display='none'; 
              document.getElementById("bpub2").style.display='block';
              document.getElementById("bpub1").style.display='none'; 
              document.getElementById("bpub3").style.display='none'; 
              }
              }
            }
        </script>
</head>
<!-- <div class="container"> -->
<div class="row justify-content-center m-2">
    <div class="col-md-12 ">
        <div class="card">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/create">Create</a></li>
                    <li class="breadcrumb-item"><a href="/create_paper">Generate Paper</a></li>
                    <li class="breadcrumb-item active" aria-current="page">NEET XI</li>
                </ol>
            </nav>
            <div class="card-body">
                <div class="row" >
                    <div class = "col-md-2 ">
                        <div class="card">
                            <ul class="list-group">
                                <a href= "/home">
                                   <li class="list-group-item">Dashboard</li>
                                </a>
                                <li class="list-group-item " ><a href="/create">Create Paper</a></li>
                                <li class="list-group-item list-group-item-secondary">View Paper</li>
                                <li class="list-group-item list-group-item-secondary">Questionn Bank</li>
                                <li class="list-group-item list-group-item-secondary">Blueprint</li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-md-10  card">
                        <form name="form1" id="form1" action="/qp" method="GET">
                        <div class="row">
                            
                            <div class="col-sm-3">
                               <!--<form name="form1" id="form1" action="/qp" method="GET">-->
                                <input type="hidden" name="exam" value="NEET">
                                <input type="hidden"name="standard" value="XI">
                                <label><strong> Subject: </strong></label><br>
                                    <select class="form-control" name="subject" id="subject" required>
                                        <option value="" selected="selected">Select subject</option>
                                    </select>
                            </div>
                            <div class="col-sm-3">
                                <label><strong> Publication: </strong></label><br>
                                <select class="form-control" name="topic" id="topic" required>
                                <option value="" selected="selected">Please select subject first</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="chapter" id="chapter" onchange="myFunction()" hidden>
                                <option value="" selected="selected">Please select topic first</option>
                                </select>
                                <!-- ******** -->
                                <label><strong>Level:</strong></label><br>
                                <select class="form-control" name="level" id="exampleFormControlSelect1" required>
                                <option value="" selected="selected">Please select level</option>
                                <option>Standard</option>
                                <option>Higher</option>                 
                                </select>
                            </div>
                            <div class="col-sm-2">
                            <label><strong>No of questions:</strong></label><br>
                            <input class="form-control" type="number" name="limit" id="limit" placeholder="no.of.questions" min="1" required oninput="calculate()">
                            </div>

                            <div class="col-sm-2">
                            <label><strong>Duration(minutes):</strong></label><br>
                            <input class="form-control" type="number" name="duration" placeholder="Enter Duration" min="1" required>
                            </div>
                            
                            <input type="hidden" id="marks" name="marks">
                        </div>
                        <!--second row-->
                        <br>
                        <div class="row P-1">
                            <div class="col-sm-12" id="pub1" style="display:none">
                                <div class="form-group">
                                <label><strong>Select Chapters :</strong></label><br>
                                
                                    <table>
                                       <tr>
                                          <td><label><input type="checkbox" name="chptr[]" value="1. Unit, Dimension and Error Analysis">1. Unit, Dimension and..</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="2. Vetors">2. Vetors</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="3. General Kinematics and Motion in One Dimension">3. General Kinematics and Mo..</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="4. Motion in Two Dimensions">4. Motion in Two Dimensions</label></td> 
                                       </tr>
                                       <tr>
                                          <td><label><input type="checkbox" name="chptr[]" value="5. Newtons Laws of Motion">5. Newtons Laws of Motion</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="6. Work , Energy, Power & Collision">&nbsp;6. Work , Energy, Power..</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="7. Rotational Dynamics">7. Rotational Dynamics</label></td>                      
                                          <td><label><input type="checkbox" name="chptr[]" value="8. Gravitation">8. Gravitation</label></td> 
                                         </tr>
                    
                                       <tr>
                                          <td><label><input type="checkbox" name="chptr[]" value="9.Properties of Matter (Elasticity, Surface Tension and Viscosity)">9.Properties of Matter...</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="10. Fluid Mechanics (Real Fluids)">10. Fluid Mechanics (Real Fluids)</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="11. Thermal Properties of Matter and Transmission of Heat">11. Thermal Properties of Matter..</label></td>                      
                                          <td><label><input type="checkbox" name="chptr[]" value="12. Kinetic Theory of Gases & Thermodynamics">12. Kinetic Theory of Gases..</label></td> 
                                         </tr>
                                         
                                        
                                        <tr>
                                          <td><label><input type="checkbox" name="chptr[]" value="13. Oscillations and SImple Harmonic Motion">13. Oscillations and SImple..</label></td>
                                          <td><label><input type="checkbox" name="chptr[]" value="14. Waves and Acoustics">14. Waves and Acoustics</label></td>
                                         
                                         </tr>
                                         
                                         
                                         
                                    </table>
                               </div>
                            </div>                            
                            <br>
                            <div class="col-sm-12" id="pub2" style="display:none">
                                
                                <div class="form-group">
                                <label><strong>Select Chapters :</strong></label><br>
                                
                                    
                                    <table>
                                    <tr>
                                    <td><label><input type="checkbox" name="chptr[]" value="1.Physical World">1.Physical World</label></td>
                                    <td ><label><input type="checkbox" name="chptr[]" value="2.Units and measurements">2.Units and measurements</label></td>
                                    <td ><label><input type="checkbox" name="chptr[]" value="3.Motion in a straight line">3.Motion in a straight line</label></td>
                                    </tr>
                                    <tr>
                                         <td><label><input type="checkbox" name="chptr[]" value="4.Motion in a plane">4.Motion in a plane</label></td> 
                                    <td><label><input type="checkbox" name="chptr[]" value="5.Laws of Motion">5.Laws of Motion</label></td>
                                    <td><label><input type="checkbox" name="chptr[]" value="6.Work Energy power">6.Work Energy power</label></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="7.System of particles and rotational motion">7.System of particles and rotational..</label></td>                      
                                    <td><label><input type="checkbox" name="chptr[]" value="8.Gravitation">8.Gravitation</label></td> 
                                    <td><label><input type="checkbox" name="chptr[]" value="9.Mechanical properties of solids">9.Mechanical properties of solids</label></td>
                                    </tr>
                                    
                                    <tr>
                                         <td><label><input type="checkbox" name="chptr[]" value="10.Mechanical properties of fluids">10.Mechanical properties of fluids</label></td>
                                    <td><label><input type="checkbox" name="chptr[]" value="11.Thermal properties of Matter">11.Thermal properties of Matter</label></td>                      
                                    <td><label><input type="checkbox" name="chptr[]" value="12.Thermodynamics">12.Thermodynamics</label></td> 
                                    </tr>
                                    
                                    <tr>
                                        
                                    <td><label><input type="checkbox" name="chptr[]" value="13.Kinetic Theory">13.Kinetic Theory</label></td>
                                    <td><label><input type="checkbox" name="chptr[]" value="14.Oscillations">14.Oscillations</label></td>
                                    <td><label><input type="checkbox" name="chptr[]" value="15.Waves">15.Waves</label></td>                      
                                    <td></td> 
                                    </tr>
                                    </table>
                               </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            <br>
                            <div class="col-sm-12" id="pub3" style="display:none"><h1>PUBLICATION 3</h1></div>
                            
                            
                            
                            <!--biology MTG -->
                            <div class="col-sm-12" id="bpub2" style="display:none">
                                
                                <div class="form-group">
                                <label><strong>Select Chapters :</strong></label><br>
                                
                                    
                                    <table>
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="1.The Living World">1.The Living World</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="2.Biological Classification">2.Biological Classification</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="3.Plant Kingdom">3.Plant Kingdom</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="4.Animal Kingdom">4.Animal Kingdom</label></td> 
                                        </tr>
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="5.Morphology of Flowering Plants">5.Morphology of Flowering</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="6.Anatomy of Flowering Plants">6.Anatomy of Flowering Plants</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="7.Structural Organisation in Animals">7.Structural Organisation in</label></td>                      
                                        <td><label><input type="checkbox" name="chptr[]" value="8.Cell:The Unit of Life">8.Cell:The Unit of Life</label></td> 
                                        </tr>
                                        
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="9.Biomolecules">9.Biomolecules</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="10.Cell Cycle and Cell Division">10.Cell Cycle and Cell Division</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="11.Transport in Plants">11.Transport in Plants</label></td>                      
                                        <td><label><input type="checkbox" name="chptr[]" value="12.Mineral Nutrition">12.Mineral Nutrition</label></td> 
                                        </tr>
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="13.Photosynthesis in Higher Plants">13.Photosynthesis in Higher Plants</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="14.Respiration in Plants">14.Respiration in Plants</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="15.Plant Growth and Development">15.Plant Growth and Development</label></td>                      
                                        <td><label><input type="checkbox" name="chptr[]" value="16.Digestion and Absorption">16.Digestion and Absorption</label></td>                       
                                        </tr>
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="17.Breathing and Exchange of Gases">17.Breathing and Exchange of Gases</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="18.Body Fluids and Circulation">18.Body Fluids and Circulation</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="19.Excretory Products and their Elimination">19.Excretory Products and their Elimination</label></td>                      
                                        <td><label><input type="checkbox" name="chptr[]" value="20.Locomotion and Movement">20.Locomotion and Movement</label></td>                       
                                        </tr>
                                        <tr>
                                        <td><label><input type="checkbox" name="chptr[]" value="21.Neural Control and Coordination">21.Neural Control and Coordination</label></td>
                                        <td><label><input type="checkbox" name="chptr[]" value="Chemical Coordination and Integration">Chemical Coordination and Integration</label></td>
                                        </tr>
                                        </table>
                               </div>
                            </div>
                            <!--biology MTG-->
                        </div>
                        <!--second row end-->
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--third-->
                        <div class="row" style="text-align:center;">
                            <div class="col">
                            <button type="submit" class="btn btn-primary mb-2" >Submit</button>
                            <div>
                        </div>
                    
                     </form>
                    </div>
                </div>
            </div>    
       
        </div>
    </div>
</div>

@endsection
<script>
    function calculate() {
        var myBox1 = document.getElementById('limit').value; 
        var myResult = myBox1 * 2;
        document.getElementById('marks').value = myResult;
    }
</script>