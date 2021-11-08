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
    <table class="table table-bordered" >
        <tr>
            <th class="col-3">Exam </th>
            <th class="col-3">Standard</th>
            <th class="col-3">Subject</th>
            <th class="col-3">Publication</th>
        </tr>
        <tr>
            <td class="col-3"><h3>{{ $product->exam }}</h3></td>
            <td class="col-3"><h3>{{ $product->standard }}</h3></td>
            <td class="col-3"><h3>{{ $product->subject }}</h3></td>
            <td class="col-3"><h3>{{ $product->publication }}</h3></td>
        </tr>
        
        <tr>
            <th class="col-6" colspan="2">Question</th>
            <th class="col-6"colspan="2" >Hint</th>
        </tr>
        <tr>  
            <td class="col-6"colspan="2"><img src="/questions/{{ $product->question }}" width="350px"></td>
            <td class="col-6"colspan="2"><img src="/hints/{{ $product->hint }}" width="350px"></td>
        </tr>
        <tr>
            <td colspan="4" >
            Answer: <h1>{{ $product->answer }}</h1>
            </td>
        </tr>
       
    </table>
    </div>
@endsection