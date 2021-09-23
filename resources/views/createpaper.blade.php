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
    <li class="breadcrumb-item active" aria-current="page">Create Paper</li>
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
  <li class="list-group-item active" aria-current="true">Create Paper</li>
  <li class="list-group-item">View Paper</li>
  <li class="list-group-item">Questionn Bank</li>
  <li class="list-group-item">Blueprint</li>
</ul>
<br>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  <!-- </div> -->
</div></div>




                    <div class = "col-md-10  card">

  <div class="card-body">
  <!-- <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- second card start-->
<div class="card">
    <div class="card-body">Need Help? <a href = "tel: +919422082780">Call US</a> | <a href = "">Whatsapp</a> | <a href="">Email</a></div>
  </div>
<!-- second card ends -->
<br>
<!-- third card starts -->
<div class="card">    
  <div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary bg-primary text-white">Create New Test</button>
  <button type="button" class="btn btn-outline-primary">Add Questions</button>
  <button type="button" class="btn btn-outline-primary">Preview & Print</button>
</div>
</div>
<!-- third card end -->
<br>
<!-- forth card start -->
<div class="card">
    <div class="card-body">&nbsp;&nbsp;&nbsp;&nbsp;Select Exam <br>

    <div class="input-group  col-md-6">
  <input type="text" class="form-control" placeholder="Select Exam... e.g. NEET / JEE" aria-label="Select Exam" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <a href = "/select_exam"><span class="input-group-text" id="basic-addon2">Select</span></a>
  </div>
</div>

    <!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
   -->
  </div>
    
</div>
<!-- fourth card end -->


    
  </div>
</div></div>
</div>
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                </div>
            </div>
       
    </div>
<!-- </div> -->
@endsection
