<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class vtcontroller extends Controller
{
    function ShowPaper(Request $req)
    {   
        $exam=$req->exam;
        $standard=$req->standard;
        $limit=$req->limit;
        $chapters=$req->chptr;
        $subject=$req->subject;
        $level=$req->level;
        $duration=$req->duration;
        $marks=$req->marks;
        $products = Product::limit($limit)
        ->where('subject',$subject)
        ->where('level',$level)
        ->where('exam',$exam)
        ->where('standard',$standard)
        ->whereIn('chapter',$chapters)
        ->inRandomOrder()->get();
        return view('/qp',compact('products','subject','duration','marks'))->with('no',1);

         }

        //  public function createPDF() {
        //     // retreive all records from db
        //     $products = Product::all();
      
        //     // share data to view
        //     view()->share('employee',$products);
        //     $pdf = PDF::loadView('/qp',compact('products'));
      
        //     // download PDF file with download method
        //     return $pdf->download('pdf_file.pdf');
        //   }
}
