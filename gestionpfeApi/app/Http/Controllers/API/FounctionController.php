<?php

namespace App\Http\Controllers\API;

use App\API\Founction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FounctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Founction::get(),200)
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
      return response()->json(Founction::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Founction  $Founction
     * @return \Illuminate\Http\Response
     */
    public function show(Founction $fonction)
    {
      return response()->json($fonction::all()->find($fonction->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Founction $fonction)
    {
      return response()->json($fonction->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Founction $fonction)
    {
      return response()->json($fonction->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
