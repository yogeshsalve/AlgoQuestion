@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center m-2">
        <div class="col-md-12 ">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <!-- <div class="card-header"> -->
                  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upload Questions</li>
  </ol>
</nav>
<!-- </div> -->

                <div class="card-body">
                <div class="row" >
                    <div class = "col-md-2 "><div class="card">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <!-- <div class="card-body"> -->
  <ul class="list-group">
  <a href= "/home"><li class="list-group-item">Dashboard</li></a>
  <li class="list-group-item" aria-current="true" data-toggle="tooltip" data-placement="top" title="Go on Dashboard to Create Paper">Create Paper</li>
  <li class="list-group-item">View Paper</li>
  <li class="list-group-item">Questionn Bank</li>
  <li class="list-group-item">Blueprint</li>
</ul>
<br>
    <a href="" class="btn btn-primary">Upload Questions</a>
  <!-- </div> -->
</div></div>
<div class ="card">
<div class="card-header text-white bg-primary">
    Upload New Question
  </div>
<div class = "col-md-10">
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

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 
<br>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> 
@csrf
<div class="row justify-content-between g-3">
  <div class="col-auto">  
  <div class="btn-group btn-group-inline">
  <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Answer</label> -->
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Exam</option>
            <option>NEET</option>
            <option>JEE</option> 
            <option>MHT-CET</option>                  
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
<div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Answer</label> -->
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Standard</option>
            <option>XI</option>
            <option>XII</option>                 
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
          <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Answer</label> -->
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Subject</option>
            <option>Easy</option>
            <option>Hard</option>                 
            </select>
          </div>
</div>

<div class="btn-group btn-group-inline">
          <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Answer</label> -->
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Level</option>
            <option>Easy</option>
            <option>Hard</option>                 
            </select>
          </div>
</div>
  </div>  
</div>
<hr>
<!-- <div class="row"> -->
<div class="row">

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><strong>QUESTION</strong></h5>
        <div class="form-group">
                <!-- <strong>Question:</strong> -->
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
                <!-- <strong>Hint:</strong> -->
                <input type="file" name="hint" class="form-control-file" placeholder="Hint">
            </div>
      </div>
    </div>          
  </div>
  <hr>
    
</div>  

<div class= "text-center">
    <button type="submit" class="btn btn-primary m-2">Upload Question</button>   
    </div>


<!-- next -->
<!-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong>
                <input type="file" name="question" class="form-control-file" placeholder="Upload Question">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Answer:</strong>
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Answer</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>      
            </select>
        </div>            
        </div>

       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hint:</strong>
                <input type="file" name="hint" class="form-control-file" placeholder="Hint">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary m-2">Upload Question</button>
        </div>
      </div>

</div> -->
</form>

</div>
</div>
<!-- //----------------------------- -->
    
  </div>
</div></div>
</div>
                    

                  
                </div>
            </div>
       
    </div>

@endsection
