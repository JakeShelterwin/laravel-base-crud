<?php

namespace App\Http\Controllers;

use App\Omino;

use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index(){
      $omini = Omino::all();
      return view('home', compact("omini"));
    }
    public function show($id){
      $omino = Omino::findOrFail($id);
      return view('showOmino', compact("omino"));
    }


    // licenzia Omino
    public function delete($id){
      $omino = Omino::findOrFail($id)->delete();

      return redirect() -> route("home");
    }

    // modifica omino
    public function edit($id){
      $omino = Omino::findOrFail($id);
      return view('editOmino', compact("omino"));
    }

    public function update(Request $request, $id){
      // $ominoData = $request->all();
      $ominoData = $request -> validate([
          'firstName' => "required|alpha",
          'lastName' => "required",
          'address' => "required",
          'code' => "required",
          'state' => "required",
          'phoneNumber' => "required",
          'role' => "required"
      ]);

      $omino = Omino::findOrFail($id);

      $omino -> firstName = $ominoData["firstName"];
      $omino -> lastName = $ominoData["lastName"];
      $omino -> address = $ominoData["address"];
      $omino -> code = $ominoData["code"];
      $omino -> state = $ominoData["state"];
      $omino -> phoneNumber = $ominoData["phoneNumber"];
      $omino -> role = $ominoData["role"];

      $omino -> save();

      return redirect() -> route("showOmino", $id)
                        -> withSuccess("Utente ".$omino["firstName"]." ".$omino["lastName"].' correttamente aggiornato');
    }

    // aggiungi omino
    public function create(){
      return view('createOmino');
    }

    public function store(Request $request){

      // $ominoData = $request->all();

      $ominoData = $request -> validate([
          'firstName' => "required|alpha",
          'lastName' => "required",
          'address' => "required",
          'code' => "required",
          'state' => "required",
          'phoneNumber' => "required",
          'role' => "required"
      ]);

      $omino= new Omino;

      $omino -> firstName = $ominoData["firstName"];
      $omino -> lastName = $ominoData["lastName"];
      $omino -> address = $ominoData["address"];
      $omino -> code = $ominoData["code"];
      $omino -> state = $ominoData["state"];
      $omino -> phoneNumber = $ominoData["phoneNumber"];
      $omino -> role = $ominoData["role"];

      $omino -> save();

      return redirect() -> route("home")
                        -> withSuccess("Utente ".$omino["firstName"]." ".$omino["lastName"].' correttamente creato');
    }
}
