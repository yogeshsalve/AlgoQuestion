@extends('layouts.app')

@section('content')
   <!-- <head>
       <style>
           table.table-bordered{
    border:5px solid black;
    margin-top:20px;
  }
       </style>
   </head> -->
   
<div class="container">
    
    <table class="table table-bordered">
        <tr>
            <th class="col-6">Question</th>
            <!-- <th class="col-2">Answer</th> -->
            <th class="col-6">Hint</th>
        </tr>
       
        <tr>  
            <td class="col-6"><img src="/questions/{{ $product->question }}" width="350px"></td>
            <!-- <td class="col-2"><h1>{{ $product->answer }}</h1></td> -->
            <td class="col-6"><img src="/hints/{{ $product->hint }}" width="350px"></td>
        </tr>

        <tr>
            <td colspan="2">
            Answer: <h1>{{ $product->answer }}
            </td>
        </tr>
       
    </table>

    <center><a href="/products"><button type="button" class="btn btn-primary btn-lg">Back</button></a></center>
    </div>
@endsection