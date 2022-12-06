<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show(){
        if (Auth::check()) {
            redirect('/Principal');
        }
        return view('Welcome');
    }

    public function login(loginRequest $request){
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            return redirect('/')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        return redirect('Principal');
    }
}
