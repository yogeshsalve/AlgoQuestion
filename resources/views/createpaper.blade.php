@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

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
<!--<br>-->
<!--    <a href="#" class="btn btn-primary">Go somewhere</a>-->
  <!-- </div> -->
</div></div>




                    <div class = "col-md-10  card">

  <div class="card-body">
  <!-- <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- second card start-->
<div class="card shadow p-1 mb-1 bg-white rounded">
    <div class="card-body">Need Help ?&nbsp;&nbsp;<a href = "tel: +919422082780" class = "link-light"><i class="fa fa-phone"></i>&nbsp;Call US</a> | <a href = ""><i class="fa fa-whatsapp"></i>&nbsp;Whatsapp</a> | <a href=""><i class="fa fa-envelope"></i>&nbsp;Email</a>  </div>
  </div>
<!-- second card ends -->
<br>
<!-- third card starts -->
 
<div class="row">
    <div class="col-sm-4 shadow p-1 mb-1 bg-white rounded">
<button type="button" class="btn btn-primary btn-lg btn-block">Create New Test</button>
</div>
    <div class="col-sm-4 shadow p-1 mb-1 bg-white rounded">
<a href = "/upload"><button type="button" class="btn btn-primary btn-lg btn-block">Upload Questions</button></a>
</div>
    <div class="col-sm-4 shadow p-1 mb-1 bg-white rounded">
<button type="button" class="btn btn-primary btn-lg btn-block">Preview & Print</button>
</div>
</div>

<!--  <div class="btn-group" role="group" aria-label="Basic outlined example">-->
<!--  <button type="button" class="btn btn-outline-primary bg-primary text-white">Create New Test</button>-->
<!--  <a href = "/upload"><button type="button" class="btn btn-outline-primary text-white">Add Questions</button></a>-->
<!--  <button type="button" class="btn btn-outline-primary">Preview & Print</button>-->
<!--</div>-->

<!-- third card end -->
<br>
<!-- forth card start -->
<!--<div class="card">-->
<!--    <div class="card-body">&nbsp;&nbsp;&nbsp;&nbsp;Select Exam <br>-->

<!--    <div class="input-group  col-md-6">-->
<!--  <input type="text" class="form-control" placeholder="Select Exam... e.g. NEET / JEE" aria-label="Select Exam" aria-describedby="basic-addon2">-->
<!--  <div class="input-group-append">-->
<!--  <a href = "/select_exam"><span class="input-group-text" id="basic-addon2">Select</span></a>-->
<!--  </div>-->
<!--</div>-->


  </div>
    
</div>
<!-- fourth card end -->


    
  </div>
</div></div>
</div>
               
                </div>
            </div>
       
    </div>
<!-- </div> -->
@endsection
