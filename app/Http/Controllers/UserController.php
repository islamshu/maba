<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:read-users'])->only('index');
        $this->middleware(['permission:create-users'])->only('create');
        $this->middleware(['permission:update-users'])->only('edit');
        $this->middleware(['permission:delete-users'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.users')->with('users' , User::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.addUser');
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
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
        $request_data =$request->except(['password_confiramtion']);
        // $path= $request->image->store('Users');
        // $request_data['image']=$path;
        $user =User::create($request_data);
        $user->attachRole('admin');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view ('admin.editUser')->with('user' ,$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            ]);

        $request_data =$request->except(['permissions']);
        //end of external if
        $user->update($request_data);
        $user->syncPermissions($request->permissions);
            return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/users');
    }
}
