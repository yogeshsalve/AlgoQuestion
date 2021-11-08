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
    <li class="breadcrumb-item">Recently Uploaded Question</li>
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
  <li class="list-group-item">Dashboard</li>
  <a href="/create_paper"><li class="list-group-item text-dark">Create Paper</li></a>
  <li class="list-group-item">View Paper</li>
  <li class="list-group-item " aria-current="true">Question Bank</li>
  <li class="list-group-item">Blueprint</li>
</ul>
<!--<br>-->
<!--    <a href="/upload" class="btn btn-primary">Upload Question</a>-->
  <!-- </div> -->
</div></div>




                    <div class = "col-md-10">

  
  <!-- <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- second card start-->
<div class="card">
  <div class="card-header text-white bg-primary">
    Total Questions:   {{$count}}
  </div>
  <div class="card-body">
  <table class="table table-bordered">
        <tr>
            <th class="col-1">No</th>
            <th class="col-4">Question</th>
            <th class="col-1">Answer</th>
            <th class="col-3">Hint</th>
            <th class="col-3">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td class="col-1">{{ ++$i }}</td>
            <td class="col-4"><img src="/questions/{{ $product->question }}" width="100px"></td>
            <td class="col-1">{{ $product->answer }}</td>
            <td class="col-3"><img src="/hints/{{ $product->hint }}" width="100px"></td>
            <td class="col-3">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Details</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}

  </div>

<!-- second card ends -->
<br>




    
  </div>
</div></div>
</div>
                   
                </div>
            </div>
       
    </div>
<!-- </div> -->
@endsection
