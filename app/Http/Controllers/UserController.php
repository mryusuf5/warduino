<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginView()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $user = User::where("username", "=", $request->username)->first();

        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put("user", $user);
                return redirect()->route("admin.index");
            }
            else
            {
                return redirect()->route("loginView")->with("error", "Wachtwoord is onjuist.");
            }
        }
        else
        {
            return redirect()->route("loginView")->with("error", "Gebruikersnaam is onjuist");
        }
    }
}
