<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.welcome");
    }

    public function logout()
    {
        if(Session::has("user"))
        {
            Session::pull("user");
            return redirect()->route("loginView");
        }
        return abort(404);
    }
}
