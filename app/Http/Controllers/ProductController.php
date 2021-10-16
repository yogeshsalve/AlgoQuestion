<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use App\Models\questions_9;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::latest()->simplePaginate(3);
        $products2 = Product::all();
        $count=count($products2);
        return view('products.index',compact('products','count'))
            ->with('i');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
    

    public function create1()
    {
        return view('questions_9.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'exam' => 'required',
            'standard' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'publication' => 'required',
            'level' => 'required',
            'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required',
            'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        
        $input = $request->all();
        
        // $input = $request->input('standard');
        
  
        if ($image1 = $request->file('question')) {
            $destinationPath = 'questions/';
            $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $input['question'] = "$profileImage";
        } 

         if($image2 = $request->file('hint')) {
            $destinationPath = 'hints/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['hint'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect("/NEET-XI")
                        ->with('success','Question Uploaded successfully.');
    }
    //-----------------------------------------------------------------------------------------------

    public function store1(Request $request)
    {
        $request->validate([
            'exam' => 'required',
            'standard' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'publication' => 'required',
            'level' => 'required',
            'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required',
            'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        
        $input = $request->all();
        
        // $input = $request->input('standard');
        
  
        if ($image1 = $request->file('question')) {
            $destinationPath = 'questions/';
            $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $input['question'] = "$profileImage";
        } 

         if($image2 = $request->file('hint')) {
            $destinationPath = 'hints/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['hint'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect("/NEET-XII")
                        ->with('success','Question Uploaded successfully.');
    }


    //jeexi function stars
    public function jeexi(Request $request)
    {
        $request->validate([
            'exam' => 'required',
            'standard' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
            'publication' => 'required',
            'level' => 'required',
            'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required',
            'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        
        $input = $request->all();
        
        // $input = $request->input('standard');
        
  
        if ($image1 = $request->file('question')) {
            $destinationPath = 'questions/';
            $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $input['question'] = "$profileImage";
        } 

         if($image2 = $request->file('hint')) {
            $destinationPath = 'hints/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['hint'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect("/JEE-XI")
                        ->with('success','Question Uploaded successfully.');
    }
    //jeexi function ends

    //jeexii function stars
     public function jeexii(Request $request)
     {
         $request->validate([
             'exam' => 'required',
             'standard' => 'required',
             'subject' => 'required',
             'chapter' => 'required',
             'publication' => 'required',
             'level' => 'required',
             'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'answer' => 'required',
             'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
   
         
         $input = $request->all();
         
         // $input = $request->input('standard');
         
   
         if ($image1 = $request->file('question')) {
             $destinationPath = 'questions/';
             $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
             $image1->move($destinationPath, $profileImage);
             $input['question'] = "$profileImage";
         } 
 
          if($image2 = $request->file('hint')) {
             $destinationPath = 'hints/';
             $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
             $image2->move($destinationPath, $profileImage);
             $input['hint'] = "$profileImage";
         }
     
         Product::create($input);
      
         return redirect("/JEE-XII")
                         ->with('success','Question Uploaded successfully.');
     }
     //jeexii function ends


     //cetxi function stars
     public function cetxi(Request $request)
     {
         $request->validate([
             'exam' => 'required',
             'standard' => 'required',
             'subject' => 'required',
             'chapter' => 'required',
             'publication' => 'required',
             'level' => 'required',
             'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'answer' => 'required',
             'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
   
         
         $input = $request->all();
         
         // $input = $request->input('standard');
         
   
         if ($image1 = $request->file('question')) {
             $destinationPath = 'questions/';
             $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
             $image1->move($destinationPath, $profileImage);
             $input['question'] = "$profileImage";
         } 
 
          if($image2 = $request->file('hint')) {
             $destinationPath = 'hints/';
             $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
             $image2->move($destinationPath, $profileImage);
             $input['hint'] = "$profileImage";
         }
     
         Product::create($input);
      
         return redirect("/CET-XI")
                         ->with('success','Question Uploaded successfully.');
     }
     //cetxi function ends

     //cetxii function stars
     public function cetxii(Request $request)
     {
         $request->validate([
             'exam' => 'required',
             'standard' => 'required',
             'subject' => 'required',
             'chapter' => 'required',
             'publication' => 'required',
             'level' => 'required',
             'question' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'answer' => 'required',
             'hint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
   
         
         $input = $request->all();
         
         // $input = $request->input('standard');
         
   
         if ($image1 = $request->file('question')) {
             $destinationPath = 'questions/';
             $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
             $image1->move($destinationPath, $profileImage);
             $input['question'] = "$profileImage";
         } 
 
          if($image2 = $request->file('hint')) {
             $destinationPath = 'hints/';
             $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
             $image2->move($destinationPath, $profileImage);
             $input['hint'] = "$profileImage";
         }
     
         Product::create($input);
      
         return redirect("/CET-XII")
                         ->with('success','Question Uploaded successfully.');
     }
     //cetxii function ends



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
      
         return redirect("/ix_upload")->with('success','Store Added Successfully.');
     }
     //ix_upload function ends

     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'question' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required',
            'hint' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image1 = $request->file('question')) {
            $destinationPath = 'questions/';
            $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $input['question'] = "$profileImage";
        } 

         if($image2 = $request->file('hint')) {
            $destinationPath = 'hints/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['hint'] = "$profileImage";
        }
          
        $product->update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
     
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}