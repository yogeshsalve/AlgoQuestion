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

<div class = "col-md-5  card">
          <!-- first block start -->
          <br>
          <label>Exam :</label>
          <select name="unreal">
            <option style="display:none"></option>
            <option>NEET</option>
            <option>JEE</option>
            <option>MHT-CET</option>
          </select>    
          <!-- first block end -->

          <!-- second block start -->
          <br>
          <label>Select Standard : </label>
          <select name="unreal">
            <option style="display:none"></option>
            <option>XI</option>
            <option>XII</option>      
          </select>  
          <!-- second block end -->

          <!-- third block starts -->
          <br>
          <label>Select Subject : </label>
          <select name="unreal">
            <option style="display:none"></option>
            <option>XI</option>
            <option>XII</option>      
          </select>  
          <!-- third block ends -->
          <br>
        </div>



                    <div class = "col-md-5 card">

  <div class="card-body">
  <!-- <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- third card starts -->
<!-- <div class="card">    
  <div class ="card-body">

  <form>
 
  <div class="form-group">
    <label for="exampleFormControlFile1">Question</label>
    <input type="file"  name= "question" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Answer</label>
    <select class="form-control" name="answer" id="exampleFormControlSelect1">
    <option selected disabled>Select Answer</option>
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Question Hint</label>
    <input type="file" name="hint" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary mb-2">UPLOAD</button>
</form>

  </div>
</div>
</div> -->
<!-- third card end -->

<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div> -->
     
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
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong>
                <input type="file" name="question" class="form-control" placeholder="Upload Question">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Answer</label>
            <select class="form-control" name="answer" id="exampleFormControlSelect1">
            <option selected disabled>Select Answer</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>      
            </select>
        </div>            
        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hint:</strong>
                <input type="file" name="hint" class="form-control" placeholder="Hint">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </div>
     
</form>


   
  </div>
    
</div>



    
  </div>
</div></div>
</div>
                    

                  
                </div>
            </div>
       
    </div>

@endsection
