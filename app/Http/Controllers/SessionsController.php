<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6'
        ]);

    }


    public function destroy(){
        //
    }
}
