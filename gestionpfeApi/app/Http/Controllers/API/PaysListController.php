<?php

namespace App\Http\Controllers\API;

use App\API\PaysList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaysListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json( PaysList::get(),200)
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
      return response()->json( PaysList::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show( PaysList $pays)
    {
      return response()->json($pays::all()->find($pays->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaysList $pays)
    {
      return response()->json($pays->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaysList $pays)
    {
      return response()->json($pays->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
