@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   .btn {
   background-color: DodgerBlue;
   border: none;
   color: white;
   padding: 12px 16px;
   font-size: 16px;
   cursor: pointer;
   width:25%;
 
   
   }
   /* Darker background on mouse-over */
   .btn:hover {
   background-color: RoyalBlue;
   }
</style>

<script>
            var subjectObject = {
              "PHYSICS": {
                "MARVEL PUBLICATION": ["1. Units & Measurements", "2. Scalers & Vetors",],
                "MTG PUBLICATION": ["Borders", "Margins", "Backgrounds", "Float"],
                "PYQS": ["Variables", "Operators", "Functions", "Conditions"]    
              },
              "CHEMISTRY": {
                "PHP": ["Variables", "Strings", "Arrays"],
                "SQL": ["SELECT", "UPDATE", "DELETE"]
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
              //document.getElementById("demo").innerHTML = "You selected1: " + x;
              //document.getElementById("name").style.visibility = 'visible'; 
            
              if(x=="MARVEL PUBLICATION"){
                //document.getElementById("demo2").innerHTML = "Great Success";
                document.getElementById("pub1").style.display='block';
                document.getElementById("pub2").style.display='none'; 
                document.getElementById("pub3").style.display='none'; 
              }
              else if(x=="MTG PUBLICATION"){
              document.getElementById("pub2").style.display='block';
              document.getElementById("pub3").style.display='none'; 
              document.getElementById("pub1").style.display='none'; 
              }
              else if(x=="PYQS"){
              document.getElementById("pub3").style.display='block';
              document.getElementById("pub1").style.display='none'; 
              document.getElementById("pub2").style.display='none'; 
              }
              }
            }
        </script>
</head>
<!-- <div class="container"> -->
<div class="row justify-content-center m-2">
   <div class="col-md-12 ">
      <div class="card">
         <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
         <!-- <div class="card-header"> -->
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/home">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Generate Question Paper - NEET XI</li>
            </ol>
         </nav>
         <!-- </div> -->
         <div class="card-body">
            <div class="row" >
               <div class = "col-md-2 ">
                  <div class="card">
                     <ul class="list-group">
                        <a href= "/home">
                           <li class="list-group-item">Dashboard</li>
                        </a>
                        <li class="list-group-item " >Create Paper</li>
                        <li class="list-group-item">View Paper</li>
                        <li class="list-group-item">Questionn Bank</li>
                        <li class="list-group-item">Blueprint</li>
                     </ul>
                  </div>
               </div>
               <div class = "col-md-10  card">
<!-- ************************************************************************************ -->

<div class="row">
                    <div class="col-sm-3">
                        <form name="form1" id="form1" action="/qp" method="GET">
                        <input type="hidden" name="exam" value="JEE"><input type="hidden"name="standard" value="XII">
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
                    <!-- ******** -->
                   
                    </div>
                    <div class="col-sm-2">
                    <label><strong>No of questions:</strong></label><br>
                    <input class="form-control" type="number" name="limit" id="limit" placeholder="no.of.questions" min="1" required oninput="calculate()">
                    </div>

                    <div class="col-sm-2">
                    <label><strong>Duration(minutes):</strong></label><br>
                    <input class="form-control" type="number" name="duration" placeholder="Enter Duration" min="1" required>
                    </div>


                </div>
                <input type="hidden" id="marks" name="marks">
                <p id="demo"></p>
                <br>
                <div class="row">
                <!-- <div class="col-sm-12" id="pub1" style="display:none"><h1>PUBLICATION 1</h1></div> -->
                <div class="col-sm-12" id="pub1" style="display:none">
                <!-- <h1>PUBLICATION 1</h1> -->
                <div class="form-group">
                <label><strong>Select Chapters :</strong></label><br>
                <label><input type="checkbox" name="chptr[]" value="1. Units & Measurements">1. Units & Measurements</label>
                <label><input type="checkbox" name="chptr[]" value="2. Scalers & Vetors">2. Scalers & Vetors</label>
                <label><input type="checkbox" name="chptr[]" value="3. Motion in a straight light">3. Motion in a straight light</label>
                <label><input type="checkbox" name="chptr[]" value="4. Motion">4. Motion</label>
                </div>
                  
                <br>
                </div>                            
                <br>
                <div class="col-sm-12" id="pub2" style="display:none"><h1>PUBLICATION 2</h1></div>
                <br>
                <div class="col-sm-12" id="pub3" style="display:none"><h1>PUBLICATION 3</h1></div>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col">
                    <button type="submit" class="btn btn-primary mb-2" >Submit</button>
                    </div>
                </div>
               
                </form>
            
        </div>


<!-- ************************************************************************************ -->
               </div>
               <!-- fourth card end -->
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<!-- </div> -->
@endsection
<script>
    function calculate() {
        var myBox1 = document.getElementById('limit').value; 
        var myResult = myBox1 * 4;
        document.getElementById('marks').value = myResult;
    }
</script>