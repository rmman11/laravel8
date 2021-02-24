<?php

namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Email;
use Carbon\Carbon;
use DB;
use Session;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create_email(Request $request){

    $time = Carbon::now();



    $email = new Email();
    $email->email = $request->email;
    $email->browse  = $request->header('User-Agent');
    $email->ip = $request->ip;  
    $email->created_at = $time;
    $email->save();

 $request->session()->flash('message', 'Newsletter successfully added!');
    return back();

           }

}
