<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    
     public function index()
    {


  

       $posts = Posts::all();

        return view('admin.posts.index',compact('posts'));





    }
        public function store(Request $request)

    {

        $this->validate($request, [

            'title' => 'required',

            'description' => 'required',

            'tags' => 'required',

        ]);


        $input = $request->all();

        $tags = explode(", ", $input['tags']);

        $post = Posts::create($input);

        $post->tag($tags);


        return back()->with('success','Post created successfully.');

    }

    public function destroy(Posts $posts)
{


  $posts->delete();

  return back();
}
public function massDestroy(Request $request)
{
  $posts->delete();

  return back();
}

}
