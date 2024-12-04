<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   function index()
   {
      $user_id = session('id');
      $gigs = Gig::where('user_id', $user_id)->get();
      return view('dashboard.dashboard', [
         "gigs" => $gigs,
      ]);
   }

   function addProductPage()
   {
      return view('dashboard.addproduct');
   }

   function store(Request $request)
   {
      $request = [
         "name" => $request->input('projectTitle'),
         "category" => $request->input('industry'),
         "image" => $request->file("image")->store('gigimages'),
         "price" => $request->input("price"),
         "duration" => $request->input("duration"),
         "description" => $request->input("description"),
         "phone" => session('phone'),
         "user_id" => session('id'),
         "user_username" => session('name'),
         "user_image" => session('image'),
         "user_description" => session('description')
      ];

      Gig::create($request);

      return redirect('/dashboard');
   }

   function gigEditPage($id)
   {

      $gig = Gig::find($id);
      $userGigs = Gig::where('user_id', $gig->user_id)->get();

      return view('gig.gigEdit', [
         "gig" => $gig,
         "usergigs" => $userGigs
      ]);
   }
}
