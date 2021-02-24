<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Session;
use Validator, Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

       $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
$categories = Category::with('children')->where('parent_id',0)->get();
//$categories = Category::with('children')->whereNull('parent_id')->get();

//$categories = Category::whereNull('parent_id')->with('children')->get();

          return view('admin.categories.create')->with([
            'categories'  => $categories
          ]);
      }

    /**
     * Store a newly created Category in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


  $validatedData = $this->validate($request, [
            'name'      => 'required|min:3|max:255|string',
              'parent_id' => 'sometimes|nullable|numeric'
      ]);

      Category::create($validatedData);



        //dd($data);
        return redirect()->route('admin.categories.index')->withSuccess('You have successfully created a Category!');
    }


    /**
     * Show the form for editing Category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

/*
        $category = DB::table('categories') -> find($id);
        return view('categories.edit_cat', ['category' => $category]);*/

        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));


    }

    /**
     * Update Category in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::findOrFail($id);
        $category->update($request->all());



        return redirect()->route('admin.categories.index');
    }




    public function show(Request $request,$id) {
      $categories = Category::with('children')->findOrFail($id);
   return view('admin.categories.show')->with([
        'categories'  => $categories
      ]);

    }

    /**
     * Remove Category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index');
    }






}