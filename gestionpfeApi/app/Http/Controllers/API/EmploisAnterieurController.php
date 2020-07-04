<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\EmploisAnterieur;
use Illuminate\Http\Request;

class EmploisAnterieurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(EmploisAnterieur::get(),200)
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
      return response()->json(EmploisAnterieur::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\salarie_entre  $salarie_entre
     * @return \Illuminate\Http\Response
     */
    public function show(EmploisAnterieur $emplois_anterieur)
    {
      return response()->json($emplois_anterieur::all()->find($emplois_anterieur->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\salarie_entre  $salarie_entre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmploisAnterieur $emplois_anterieur)
    {
      return response()->json($emplois_anterieur->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\salarie_entre  $salarie_entre
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmploisAnterieur $emplois_anterieur)
    {
      return response()->json($emplois_anterieur->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
