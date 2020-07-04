<?php

namespace App\Http\Controllers\API;

use App\API\SituationFamilial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SituationFamilialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(SituationFamilial::get(),200)
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
      return response()->json(SituationFamilial::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\SituationFamilial  $situationFamilial
     * @return \Illuminate\Http\Response
     */
    public function show(SituationFamilial $situationFamilial)
    {
      return response()->json($situationFamilial::all()->find($situationFamilial->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\SituationFamilial  $situationFamilial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SituationFamilial $situationFamilial)
    {
      return response()->json($situationFamilial->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\SituationFamilial  $situationFamilial
     * @return \Illuminate\Http\Response
     */
    public function destroy(SituationFamilial $situationFamilial)
    {
      return response()->json($situationFamilial->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
