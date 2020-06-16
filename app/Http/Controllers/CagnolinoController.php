<?php

namespace App\Http\Controllers;

use App\Cagnolino;

use Illuminate\Http\Request;

class CagnolinoController extends Controller
{
  public function index() {
    $cagnolini = Cagnolino::all();
    return view('home', compact("cagnolini"));
  }

  public function showCagnolino($id) {
    $cagnolino = Cagnolino::findOrFail($id);
    return view('stampaCagnolino', compact("cagnolino"));
  }
}
