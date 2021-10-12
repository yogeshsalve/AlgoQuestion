@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow p-5 mb-2 bg-white rounded">
    <div class="row">
        <div class="col">
            
                <h2>Edit Question</h2>
            </div>
            <div class="col">
                <a class="btn btn-danger float-right" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    
     
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
    
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <strong>Question:</strong>
                    <input type="file" name="question" class="form-control" placeholder="Question"><br>
                    <!-- <img src="/questions/{{ $product->question }}" width="100px"> -->
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <!-- <strong>Question:</strong> -->
                    <!-- <input type="file" name="question" class="form-control" placeholder="Question"><br> -->
                    <img src="/questions/{{ $product->question }}" width="100px">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Answer:</strong>
                    <input type="text" name="answer" value="{{ $product->answer }}" class="form-control" placeholder="Answer" style="text-transform:uppercase" oninput="this.value = this.value.toUpperCase()" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Hint:</strong>
                    <input type="file" name="hint" class="form-control" placeholder="image"><br>
                    <!-- <img src="/hints/{{ $product->hint }}" width="100px"> -->
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <!-- <strong>Hint:</strong> -->
                    <!-- <input type="file" name="hint" class="form-control" placeholder="image"><br> -->
                    <img src="/hints/{{ $product->hint }}" width="100px">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
     
    </form>
    </div>
    </div>
@endsection