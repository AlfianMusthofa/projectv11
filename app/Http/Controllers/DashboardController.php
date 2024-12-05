<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\User;
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

   function editGig($id)
   {
      $gig = Gig::find($id);
      $userGigs = Gig::where('user_id', $gig->user_id)->get();

      return view('gig.edit', [
         "gig" => $gig,
         "usergigs" => $userGigs
      ]);
   }

   function update(Request $request, $id)
   {

      $gig = Gig::find($id);

      $request = [
         $gig->name = $request->input('projectTitle'),
         $gig->category = $request->input('industry'),
         $gig->duration = $request->input('duration'),
         $gig->price = $request->input('price'),
         $gig->description = $request->input('description'),
         $gig->phone = session('phone'),
         $gig->user_username = session('name'),
         $gig->user_description = session('description')
      ];

      // ddd($request);

      $gig->save();

      return redirect('/dashboard');
   }

   function edituserpage($id)
   {
      $data = User::find($id);

      return view('dashboard.editUser', [
         'datas' => $data
      ]);
   }

   function updateUser(Request $request, $id)
   {
      $user = User::find($id);

      $request = [
         $user->name = $request->input('username'),
         $user->phone = $request->input('phoneNumber'),
         $user->description = $request->input('description')
      ];

      $user->save();

      session([
         'name' => $user->name,
         'phone' => $user->phone,
         'description' => $user->description,
      ]);

      return redirect('/dashboard');
   }
}
