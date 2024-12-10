<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class DefaultController extends Controller
{

    function home()
    {
        return view('home');
    }

    function registration()
    {

        return view('registration');
    }

    function register(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;
        $user->save();


        return view('home');
    }
}
