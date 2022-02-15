<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if (@auth("admin")->attempt($data)) {
            return redirect("admin/posts/index");
        }

        return redirect("admin/login")->withErrors(['email' => "Пользователь не найден, либо данные введены не правильно. Харе выдавать себя за другого!"]);
    }

    public function logout()
    {
        auth("admin")->logout();

        return redirect("/");
    }
}
