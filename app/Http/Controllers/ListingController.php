<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{   
    // show all listings
    public function index()
    {
      // dd(request('tag'));
      // Listing::all()  es el model cargado llama  a la funcion 
      return view('listings.index', [
        'heading' => 'Latest listings',
        'listings' => Listing::latest()->filter(request(['tag','search']))->get()
      ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
      return view('listings.show', [
        'listing' => $listing
      ]);
    }
}
