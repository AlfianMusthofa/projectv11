<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Http\Requests\StoreGigRequest;
use App\Http\Requests\UpdateGigRequest;
use GuzzleHttp\Psr7\Request;

class GigController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index($id)
   {
      $gig = Gig::find($id);
      $userGigs = Gig::where('user_id', $gig->user_id)->get();

      return view('gig.detail', [
         "gig" => $gig,
         "usergigs" => $userGigs
      ]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      //
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      ddd($request);
   }

   /**
    * Display the specified resource.
    */
   public function show(Gig $gig)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Gig $gig)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(UpdateGigRequest $request, Gig $gig)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy($id)
   {
      $deleted = Gig::find($id);
      $deleted->delete();

      return redirect('/dashboard');
   }
}
