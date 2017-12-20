<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('users.index',compact('users'));
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/');
    }

    public function edit(){
        //
    }

    public function update(){
        //
    }

    public function destroy(){
        //
    }
}
