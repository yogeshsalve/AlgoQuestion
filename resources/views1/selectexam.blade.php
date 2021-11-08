@extends('layouts.app')

@section('content')
<div class="row justify-content-center m-2">
  <div class="col-md-12 ">
    <div class="card">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Paper</li>
          <li class="breadcrumb-item active" aria-current="page">Select Exam</li>
        </ol>
      </nav>

      <div class="card-body">
        <div class="row" >
          <div class = "col-md-2 "><div class="card">
            <ul class="list-group">
            <a href= "/home"><li class="list-group-item">Dashboard</li></a>
            <li class="list-group-item active" aria-current="true">Create Paper</li>
            <li class="list-group-item">View Paper</li>
            <li class="list-group-item">Questionn Bank</li>
            <li class="list-group-item">Blueprint</li>
            </ul>
            <br>
            <a href="#" class="btn btn-primary">Go somewhere</a>
  
          </div>
        </div>  


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

        <div class = "col-md-5  card">
          
        </div>

    
</div>
<!-- fourth card end -->


    
  </div>
</div></div>
</div>
                   
                </div>
            </div>
       
   
@endsection
