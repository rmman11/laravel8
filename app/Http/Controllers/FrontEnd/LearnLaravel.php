<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;

use Gate;
use Symfony\Component\HttpFoundation\Response;
use DB;
use Hash;
use File;




class LearnLaravel extends Controller
{
    //


   protected $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }
    public function index(Request $request){

      $today =  Carbon::now();
      $title   = "Home";


    //now get all user and services in one go without looping using eager loading
    //In your foreach() loop, if you have 1000 users you will make 1000 queries

          $categories = Category::where('parent_id', '=', 0)->get();

        $allCategories = Category::pluck('name','id')->all();

    //  $products = $this->products->latest('created_at')->paginate(10);

     return view('frontend.pages.welcome',compact('categories','allCategories'));


    }





    public function search(Request $request){

         $search = $request->input('product');

     if($request->ajax()) {
          
            $data = Product::where('name', 'LIKE', $search.'%')
                ->get();
           
            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="list-group-item"><a href="#">'.$row->name.'</a></li>';
                }
              
                $output .= '</ul>';
            }
            else {
             
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
           
            return $output;
        }


  

    // Search in the title and body columns from the posts table
    $product = Product::with('category')
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('frontend.results', compact('product'));

    }





    public function sidebar(){

      $categories = \App\Models\Category::where('parent_id',0)->get();

    return view('frontend.layouts.sidebar', compact('categories'));
}



 public function show($id)
    {
      $product = DB::table('products')
        ->where('id', '=',$id)
        ->first();
       return view('frontend.pages.show', [
         'product' => $product
    ]);
    }



    public function about(){
       $today =  Carbon::now();
    return view('frontend/pages/about',['today' => $today]);

    }
  public function view($id) {

   $product = DB::table('products')
        ->where('id', '=',$id)
        ->first();

    return view('frontend.pages.view_product', [
         'product' => $product
    ]);
}



public function product($id){

 $product = Product::with('category')
                 ->where('products.id', '=',$id)
                 ->first();
// dd($product);
   return view('frontend.pages.list',compact('product'))->with(['product' => $product]);
   } 


   
}
