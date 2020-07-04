<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\Accident;
use Illuminate\Http\Request;

class AccidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Accident::get(),200)
      ->header('statut', 'infos afficher avec success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return response()->json(Accident::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function show(Accident $accident)
    {
      return response()->json($accident::all()->find($accident->id),200)
      ->header('statut', ' affichage effectuer avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accident $accident)
    {
      return response()->json($accident->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accident $accident)
    {
      return response()->json($accident->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
