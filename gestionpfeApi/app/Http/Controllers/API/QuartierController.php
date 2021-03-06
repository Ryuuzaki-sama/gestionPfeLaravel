<?php

namespace App\Http\Controllers\API;

use App\API\Quartier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Quartier::get(),200)
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
      return response()->json(Quartier::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function show(Quartier $quartier)
    {
      return response()->json($quartier::all()->find($quartier->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quartier $quartier)
    {
      return response()->json($quartier->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartier $quartier)
    {
      return response()->json($quartier->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
