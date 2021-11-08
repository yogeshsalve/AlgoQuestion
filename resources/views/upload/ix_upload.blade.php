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
               
                </div>
          </div>
          <div class="col-md-10 ">
            <div class="card" >
              <div class="card-header text-white bg-primary">
              Standard IX 
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
    


    <form action="/ix_upload" method="POST" enctype="multipart/form-data"> 
        @csrf

            <div class="row ">
              <div class="col-sm-2 ">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group ">   
                   
                    <input type="text" class="form-control" readonly name="standard" value="IX" id="standard">
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
    "1. सर्वात्मका शिवसुंदरा": ["1", "2", "3 "],
    "2. संतवाणी": ["1", "2", "3 "],
    "3. बेटा, मी ऐकतो आहे!": ["1", "2", "3 "],
    "4. जी. आय. पी. रेल्": ["1", "2", "3 "],
    "*. काझीरंगा": ["1", "2", "3 "],
    "5. व्यायामाचे महत्त": ["1", "2", "3 "],
    "6. ऑलिंपिक वर्तुळांचा गोफ": ["1", "2", "3 "],
    "7. दिव्याच्या शोधामागचे दिव्": ["1", "2", "3 "],
    "8. सखू आजी": ["1", "2", "3 "],
    "*.  हास्यचित्रांतली मुलं": ["1", "2", "3 "],
    "9. उजाड उघडे माळरानही": ["1", "2", "3 "],
    "10. कुलूप": ["1", "2", "3 "],
    "11. आभाळातल्या पाऊलवा": ["1", "2", "3 "],
    "12. पुन्हा एकदा": ["1", "2", "3 "],
    "*. व्हेनिस": ["1", "2", "3 "],
    "13. तिफन": ["1", "2", "3 "],
    "14. ते जीवनदायी झा": ["1", "2", "3 "],
    "15. माझे शिक्षक व संस्कार": ["1", "2", "3 "],
    "16. शब्दांचा खेळ": ["1", "2", "3 "],
    "*. विश्वकोश": ["1", "2", "3 "],
    "*. उपयोजित लेखन   ": ["1", "2", "3 "]
  },
  
  "ENGLISH": {
    "1.1 Life": ["1", "2", "3 "],
    "1.2 A Synopsis- The Swiss Family Robinson": ["1", "2", "3 "],
    "1.3 Have you ever seen ?": ["1", "2", "3 "],  
    "1.4 Have you thought of the verb 'have'": ["1", "2", "3 "],  
    "1.5 The Necklace": ["1", "2", "3 "],  
    "2.1 Invictus": ["1", "2", "3 "],  
    "2.2 A True Story of Sea Turtles": ["1", "2", "3 "],  
    "2.3 Somebody's Mother": ["1", "2", "3 "],  
    "2.4 The Fall of Troy": ["1", "2", "3 "],  
    "2.5 Autumn": ["1", "2", "3 "],  
    "2.6 The Past in the Present": ["1", "2", "3 "],  
    "3.1 Silver": ["1", "2", "3 "],  
    "3.2 Reading Works of Art": ["1", "2", "3 "],  
    "3.3 The Road Not Taken": ["1", "2", "3 "],  
    "3.4 How the First Letter was Written": ["1", "2", "3 "],  
    "4.1 Please Listen!": ["1", "2", "3 "],  
    "4.2 The Storyteller": ["1", "2", "3 "],  
    "4.3 Intellectual Rubbish": ["1", "2", "3 "],  
    "4.4 My Financial Career": ["1", "2", "3 "],  
    "4.5 Tansen ": ["1", "2", "3 "]
  },

  "HINDI": {
    "1.1. चाँदनी रात": ["1", "2", "3 "],
    "1.2. बिल्‍ली का बिलंगुड़ा": ["1", "2", "3 "],
    "1.3. कबीर": ["1", "2", "3 "],  
    "1.4. किताबे": ["1", "2", "3 "],  
    "1.5. जूलिया": ["1", "2", "3 "],  
    "1.6. ऐ सखि !": ["1", "2", "3 "],  
    "1.7. डाॅक्‍टर का अपहरण": ["1", "2", "3 "],  
    "1.8. वीरभूमि पर कुछ दिन": ["1", "2", "3 "],  
    "1.9. वरदान माँगूँगा नही": ["1", "2", "3 "],  
    "1.10. रात का चौकीदार": ["1", "2", "3 "],  
    "1.11. निर्माणों के पावन युग मे": ["1", "2", "3 "],  
    "2.1. कह कविराय": ["1", "2", "3 "],  
    "2.2. जंगल (पूरक पठन)": ["1", "2", "3 "],  
    "2.3. इनाम": ["1", "2", "3 "],  
    "2.4. सिंधु का जल": ["1", "2", "3 "],  
    "2.5. अतीत के पत": ["1", "2", "3 "],  
    "2.6. निसर्ग वैभव": ["1", "2", "3 "],  
    "2.7. शिष्‍टाचार": ["1", "2", "3 "],  
    "2.8. उड़ान": ["1", "2", "3 "],  
    "2.9. मेरे पिता जी": ["1", "2", "3 "],  
    "2.10. अपराजेय": ["1", "2", "3 "],  
    "2.11. स्‍वतंत्र गान": ["1", "2", "3 "],  
   },

  "SANSKRIT": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "HISTORY": {
    "1. Sources of History": ["1", "2", "3 "],
    "2. India:Events after 1960": ["1", "2", "3 "],
    "3. India's Internal Challenges": ["1", "2", "3 "], 
    "4. Economic Development": ["1", "2", "3 "], 
    "5. Education": ["1", "2", "3 "], 
    "6. Empowerment of Women and other Weaker Sections": ["1", "2", "3 "], 
    "7. Science and Technology": ["1", "2", "3 "], 
    "8. Industry and Trade": ["1", "2", "3 "], 
    "9. Changing life:1": ["1", "2", "3 "], 
    "10. Changing life:2 ": ["1", "2", "3 "] 
  },

  "POLITICAL SCIENCE": {
    "HINDI1": ["1", "2", "3 "],
    "HINDI2": ["1", "2", "3 "],
    "HINDI3": ["1", "2", "3 "]   
  },

  "GEOGRAPHY": {
    "1. Distributional Maps ": ["1", "2", "3 "],
    "2. Endogenetic Movements": ["1", "2", "3 "],
    "3. Exogenetic Processes Part-1": ["1", "2", "3 "],
    "4. Exogenetic Processes Part-2": ["1", "2", "3 "],
    "5. Precipitation": ["1", "2", "3 "],
    "6. The Properties of Sea Water ": ["1", "2", "3 "],
    "7. International Date Line": ["1", "2", "3 "],
    "8. Introduction to Economics": ["1", "2", "3 "],
    "9. Trade": ["1", "2", "3 "],
    "10. Urbanisation": ["1", "2", "3 "],
    "11. Transport and Communication": ["1", "2", "3 "],
    "12. Tourism": ["1", "2", "3 "]
  },

  "MATHS I": {
    "1. Sets": ["1", "2", "3 "],
    "2. Real Numbers": ["1", "2", "3 "],
    "3. Polynomials": ["1", "2", "3 "], 
    "4. Ratio and Proportion": ["1", "2", "3 "], 
    "5. Linear Equations in Two Variables": ["1", "2", "3 "], 
    "6. Financial Planning": ["1", "2", "3 "], 
    "7. Statistics": ["1", "2", "3 "]
  },

  "MATHS II": {
    " 1. Basic Concepts in Geometry": ["1", "2", "3 "],
    "2. Parellel Lines": ["1", "2", "3 "],
    "3. Triangles": ["1", "2", "3 "],   
    "4. Constructions of Triangles": ["1", "2", "3 "],   
    "5. Quadrilaterals": ["1", "2", "3 "],   
    "6. Circle": ["1", "2", "3 "],  
    "7. Co-ordinate Geometry": ["1", "2", "3 "],   
    "8. Trignometry": ["1", "2", "3 "],  
    "9. Surface Area and Volume": ["1", "2", "3 "], 
  },

  "SCIENCE": {
    "1. Laws of Motion": ["1", "2", "3 "],
    "2. Work and Energy": ["1", "2", "3 "],
    "3. Current Electricity": ["1", "2", "3 "],   
    "4. Measurement of Matter": ["1", "2", "3 "],   
    "5. Acids, Bases and Salts": ["1", "2", "3 "],   
    "6. Classification of Plants": ["1", "2", "3 "],   
    "7. Energy Flow in an Ecosystem": ["1", "2", "3 "],   
    "8. Useful and Harmful Microbes": ["1", "2", "3 "],   
    "9.Environmental Management ": ["1", "2", "3 "],   
    "10. Information Communication Technology(ICT)": ["1", "2", "3 "],   
    "11. Reflection of Light": ["1", "2", "3 "],   
    "12. Study of Sound": ["1", "2", "3 "],   
    "13. Carbon: An important element": ["1", "2", "3 "],   
    "14. Substance in Common Use": ["1", "2", "3 "],   
    "15. Life Processes in Living Organisms": ["1", "2", "3 "],   
    "16. Heredity and Variation": ["1", "2", "3 "],   
    "17. Intoduction to Biotechnology": ["1", "2", "3 "],   
    "18. Observing Space:Telescopes": ["1", "2", "3 "]
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
