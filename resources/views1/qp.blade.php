<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @media print {
        #printPageButton {
            display: none;
        }
        @media print {
        div {
            break-inside: avoid;
        }
        }
        }
    </style>
</head>
<body>
<div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     
                 </div>
                 <div class="pull-right">
                     <!-- <a class="btn btn-success" href="/upload"> Create New Question</a> -->
                     <button onclick="window.print()" id="printPageButton">Print this page</button>
                 </div>
             </div>
         </div>
<div class="card m-5" style="border:none">
  
  <div class="card-body">
    

  <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 2;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        ?>
        
        <table style="width:100%">
            <tr>
                <th style="text-align: left;vertical-align: middle;">Subject: {{$subject}}</th>
                <th style="text-align: center;vertical-align: middle;" rowspan="2"><h3>Vidyatirth Classes, Neral</h3></th>
                <th style="text-align: right;vertical-align: middle;">Marks:{{$marks}}</th>
            </tr>
            <tr>
            <th style="text-align: center;vertical-align: middle;"></th>
            <th style="text-align: right;vertical-align: middle;">Duration:{{$duration}} mins</th>
            </tr>
        </table>
<hr style="border: 2px solid black;"><br>
<div class="row">
<?php foreach ($products as $product) { ?>  <div class="col-md-1" style="text-align: right;">Q.{{$no++}}</div>
        <div class="col-md-<?php echo $bootstrapColWidth - 1; ?>">
            <div class="thumbnail">
            <img src="/questions/{{ $product->question}}" width="480px">
            </div>
        </div>
<?php
$rowCount++;
if ($rowCount % $numOfCols == 0) {
    echo '</div><div class="row"><br><br>';
}
} ?>
</div>


  </div>

</div>
</body>
</html>