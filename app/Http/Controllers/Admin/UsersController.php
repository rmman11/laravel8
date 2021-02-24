<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use File;


class UsersController extends Controller
{
  public function index()
  {


    $users = User::all();

    return view('admin.users.index', compact('users'));
  }

  public function create()
  {

    $roles = Role::pluck('title','id')->all();
    return view('admin.users.create', compact('roles'));
  }

  public function store(Request $request)
  {


    

    $user = new User();
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'roles' => 'required'
    ]);


    $time = Carbon::now();
    $input = $request->all();
    $input['password'] = Hash::make($input['password']);


    $user = User::create($input);
    $user->created_at = $time;
    $user->roles()->sync($request->input('roles', []));

    $photo = array();
    if ($request->hasFile('photo')) {
     $file = $request->file('photo');

   //getting timestamp
     $timestamp = str_replace([' ', ':'], '-', Carbon::now() -> toDateTimeString());

     $photo = $timestamp . '-' . $file -> getClientOriginalName();
     $data['photo'] = '/images/avatars/' . $request->file('photo')->getClientOriginalName();
     $user->photo = $photo;

     $file->move(public_path() . '/images/avatars/', $photo);

   }



   $user->save();

   return redirect()->route('admin.users.index');
 }

 public function edit(User $user)
 {


  $roles = Role::all()->pluck('title', 'id');

  $user->load('roles');

  return view('admin.users.edit', compact('roles', 'user'));
}




public function update(Request $request, User $user)
{
  $user->update($request->all());
  $user->roles()->sync($request->input('roles', []));

  return redirect()->route('admin.users.index');
}

public function show(User $user)
{


  $user->load('roles');

  return view('admin.users.show', compact('user'));
}

public function destroy(User $user)
{


  $user->delete();

  return back();
}

public function massDestroy(Request $request)
{
  User::whereIn('id', request('id'))->delete();

  return back();
}
}
