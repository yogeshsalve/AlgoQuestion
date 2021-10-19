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
            <div class="card">  
              <!-- card started -->
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

            <div class="row">
              
              <div class="col-sm-1">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group ">   
                    <h5 class="card-title">Standard</h5>
                   <input type="text" class="form-control" readonly name="standard" value="IX" id="standard">
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group ">   
                    <h5 class="card-title">Subject</h5>
                    <select class="form-control" name="subject" id="select1">
                      <option value="1">Marathi</option>
                      <option value="2">English</option>
                      <option value="3">Hindi</option>
                      <option value="4">Sanskrit</option>
                      <option value="5">History</option>
                      <option value="6">Political Science</option>
                      <option value="7">Geography</option>
                      <option value="8">Maths I</option>
                      <option value="9">Maths II</option>
                      <option value="10">Science</option>                      
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="btn-group btn-group-inline mt-2">
                  <div class="form-group ">   
                    <h5 class="card-title">Chapter</h5>
                    <select class="form-control" name="chapter" id="select2">
                      <option value="1">Banana1</option>
                      <option value="1">Apple</option>
                      <option value="1">Orange</option>
                      <option value="2">Wolf</option>
                      <option value="2">Fox</option>
                      <option value="2">Bear</option>
                      <option value="3">Eagle</option>
                      <option value="3">Hawk</option>
                      <option value="4">BWM<option>
                  </select>
                  </div>
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Question</label>
              <textarea class="form-control" name="question" id="exampleFormControlInput1" placeholder="Enter Your Question Here" rows="2"></textarea>
            </div>
            <div class="row">
              <div class="col mb-2">
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
            </div> 
            <!-- card ended -->
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</form>

<script src="jquery-3.5.1.min.js"></script>
<script>
var $select1 = $( '#select1' ),
		$select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );


</script>
 
<!-- <script>
var subjectObject = {
    "PHYSICS": {
    "MARVEL PUBLICATION",
    "MTG PUBLICATION",
    "PYQS PUBLICATION"
  },
  "CHEMISTRY": {
    "MARVEL PUBLICATION",
    "MTG PUBLICATION",
    "PYQS PUBLICATION"  
  },

  "BIOLOGY": {
    "MARVEL PUBLICATION",
    "MTG PUBLICATION",
    "PYQS PUBLICATION" 
  },
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  // var topicSel = document.getElementById("publication");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
//     topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      chapterSel.options[chapterSel.options.length] = new Option(y, y);
    }
  }
//   topicSel.onchange = function() {
//     //empty Chapters dropdown
//     chapterSel.length = 1;
//     //display correct values
//     var z = subjectObject[subjectSel.value][this.value];
//     for (var i = 0; i < z.length; i++) {
//       chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
//     }
//   }
}
</script> -->

@endsection
