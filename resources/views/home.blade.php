@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center m-2">
        <div class="col-md-12 ">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>    
  </ol>
</nav>

                <div class="card-body">
                <div class="row" >
                    <div class = "col-md-2 "><div class="card">
  <!-- <div class="card-header">
    Featured
  </div> -->
  <!-- <div class="card-body"> -->
  <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Dashboard</li>
  <a href="/create_paper"><li class="list-group-item">Create Paper</li></a>
  <li class="list-group-item">View Paper</li>
  <a href="/products"><li class="list-group-item">Question Bank</li></a>
  <li class="list-group-item">Blueprint</li>
</ul>
<br>
    <a href="/upload" class="btn btn-primary">Upload Question</a>
  <!-- </div> -->
</div></div>




                    <div class = "col-md-10  card">

  <div class="card-body">
  <!-- <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- second card start-->
<div class="card">
  <div class="card-header text-white bg-primary">
    Generate New Question Paper
  </div>
  <div class="card-body">
  <a href= "/create_paper"><button type="button" class="btn btn-primary">Start </button></a>
  <button type="button" class="btn btn-outline-secondary">Demo</button>
<button type="button" class="btn btn-outline-success">Buy</button>
    
  </div>
</div>
<!-- second card ends -->
<br>
<!-- third card starts -->
<div class="card">
  <div class="card-header">
    Exams
  </div>
  <div class="card-body">
  <div class="row row-cols-1 row-cols-md-6 g-4">
  <div class="col">
    <div class="card">
      <img src="cp3.png" class="card-img-top" alt="..." >
      <div class="card-footer">
      <small class="text-muted">Create Paper</small>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="cp3.png" class="card-img-top" alt="..."  >
      <div class="card-footer">
      <small class="text-muted">View Papers</small>
    </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card">
    <img src="cp3.png" class="card-img-top" alt="..." >      
    <div class="card-footer">
      <small class="text-muted">Question Bank</small>
    </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card">
    <img src="cp3.png" class="card-img-top" alt="..." >      
    <div class="card-footer">
      <small class="text-muted">Blueprints</small>
    </div>
    </div>
  </div> 

</div>
</div>
<!-- third card end -->



    
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
