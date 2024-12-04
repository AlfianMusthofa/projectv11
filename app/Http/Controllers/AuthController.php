<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   function index()
   {
      return view('auth.login');
   }

   function signup()
   {
      return view('auth.signup');
   }

   function login(Request $request)
   {
      $credentials = $request->validate([
         "name" => ['required'],
         "password" => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();
         $request->session()->put('id', Auth::user()->id);
         $request->session()->put('name', Auth::user()->name);
         $request->session()->put('phone', Auth::user()->phone);
         $request->session()->put('image', Auth::user()->image);
         $request->session()->put('description', Auth::user()->description);

         return redirect()->intended('/home');
      }
   }

   function store(Request $request)
   {
      $validatedData = $request->validate([
         "name" => ["required"],
         "password" => ["required"],
         "phone" => ["required"]
      ]);

      User::create($validatedData);

      return redirect()->intended('/home');
   }
}
