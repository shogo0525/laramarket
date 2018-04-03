<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function signup() {
        return view('user.signup');
    }

    public function postSignup(Request $request) {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        return redirect()->route('product.index');
    }

    public function signin() {
        return view('user.signin');
    }

    public function postSignin(Request $request) {
        $this->validate($request, [
            'email' => 'email|required|',
            'password' => 'required|min:6'
        ]);

        $auth = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if($auth) {
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function profile() {
        return view('user.profile');
    }


}
