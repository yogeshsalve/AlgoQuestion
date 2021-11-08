<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questions_9;

class NineController extends Controller
{
    //ix_upload function starts
    public function ix_upload(Request $request)    
    {
        $request->validate([
            'standard' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'question' => 'required',          
            'answer' => 'required',                           
        ]);
  
        
        $input = $request->all();     
            
  
        if ($image = $request->file('otherimage')) {
            $destinationPath = 'otherimages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['otherimage'] = "$profileImage";
        } 
     
        questions_9::create($input);
     
        return redirect("/ix_upload")->with('success','Question Uploaded Successfully.');
    }
    //ix_upload function ends
}
