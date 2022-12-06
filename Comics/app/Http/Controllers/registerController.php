<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Models\User;

class registerController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(registerRequest $request){
        $user = User::create($request->validated());
        return redirect('/')->with('success','Usuario Registrado');
    }
}
