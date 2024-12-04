<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Gig;

class HomeController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $tekstranslation = "Teks Translation";
      $graphic = "Graphic & Desain";
      $programming = "Programming & Tech";

      $teks_translation = Gig::where('category', $tekstranslation)->get();
      $gd = Gig::where('category', $graphic)->get();
      $code = Gig::where('category', $programming)->get();

      return view('home.home', [
         "tekstranslations" => $teks_translation,
         "grapicsDesign" => $gd,
         "codes" => $code,
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
   public function store(StoreHomeRequest $request)
   {
      //
   }

   /**
    * Display the specified resource.
    */
   public function show(Home $home)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Home $home)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(UpdateHomeRequest $request, Home $home)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Home $home)
   {
      //
   }
}