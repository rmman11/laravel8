<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Carbon\Carbon;
use Session;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use DB;
use Hash;
use File;



class ProductController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

     

  $products = Product::with('category')->get();
  // for relation between two tables in laravel

       //dd($products);
        return view('admin.products.index',compact('products'));
    }





  public function categories()
{
    return DB::table('categories')->pluck('name', 'id');

}
    public function create() {
        $title = "Create Products";
       $categories = Category::get()->pluck('name', 'id');   
        return view("admin.products.create", compact('title','categories'));
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::where('id', $id)->first();
     $product = Product::with('category')
                 ->where('products.id', '=',$id)
                 ->first();
        return view('admin.products.show')->with(['product' => $product]);
    }


    public function store(Request $request){

///'name','slug','description','price','image',

  $prod = new Product();
  $categories = Category::with('children')->whereNull('parent_id')->get();
    $this -> validate($request, [
    'name' => 'required',
    'slug' => 'required',
    'price' => 'required',
    'description' => 'required']);

    $prod->name = $request->name;
    $prod->slug = $request->slug;
    $prod->price = $request->price;
    $prod->description = $request->description;
    $prod->category_id    =  $request->category_id;

    $prod->quantity = $request->quantity;
    $prod->weight = $request->weight;
    //$prod->brand = $request->brand;
    $prod->status = "1";



    if ($request->hasFile('image')) {
      //$file = Input::file('image');
      $file = $request->file('image');
      //getting timestamp
      $timestamp = str_replace([' ', ':'], '-', Carbon::now() -> toDateTimeString());

      $name = $timestamp . '-' . $file -> getClientOriginalName();
      $data['image'] = 'uploads/' . $request->file('image')->getClientOriginalName();
      $prod->image = $name;

      $file->move(public_path() . '/uploads/', $name);
      //dd($name);

    }

    $prod->save();

    //dd($prod);
    $request->session()->flash('message', 'Product successfully added!');

    return back();

  }

  public function edit($id){


    $product = Product::find($id);

    $cat = DB::table('categories')->pluck('name', 'id');

  return view('admin.products.edit', compact('id','cat'),['product' => $product]);


  }
  public function update($id, Request $request){


    $product = Product::findOrFail($id);
    $cat = DB::table('categories')->find($id);
    $this -> validate($request, [
    'name' => 'required',
    'slug' => 'required',
    'price' => 'required',
    'description' => 'required']);

  //  $input = $request->all();

    if($request->hasFile('image') ){
      $file = $request->file('image');
     // $product->image = $filename;
     $timestamp = str_replace([' ', ':'], '-', Carbon::now() -> toDateTimeString());
     $name = $timestamp . '-' . $file -> getClientOriginalName();
     $data['image'] = 'uploads/' . $request->file('image')->getClientOriginalName();
     $product->image = $name;

     $file->move(public_path() . '/uploads/', $name);
 }

 $product->name = $request->name;
 $product->slug = $request->slug;
 $product->price = $request->price;
 $product->description = $request->description;
 $product->category_id    =  $request->category_id;
 $product->quantity = $request->quantity;
 $product->weight = $request->weight;
 //$product->brand = $request->brand;
 $product->status = "1";
 $product->save();

  $request->session()->flash('message', 'Users successfully Updated!');

 return redirect()->route('admin.products.index');

  }
  public function destroy($id) {

    /*-----------here is our delete-----*/
     $prod = Product::findOrFail($id);
     File::delete(public_path() . '/uploads/' , $prod->image);
     $prod->delete();
       return back();
    Session::flash('flash_message', 'Task successfully deleted!');


    }

    public function massDestroy(Request $request)
      {
          Product::whereIn('id', request('ids'))->delete();

          return response(null, Response::HTTP_NO_CONTENT);
      }


}