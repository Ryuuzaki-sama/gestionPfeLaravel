<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\Salarie;
use Illuminate\Http\Request;

class SalarieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Salarie::get(),200)
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
      return response()->json(Salarie::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function show(Salarie $salarie)
    {
      return response()->json($salarie::all()->find($salarie->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salarie $salarie)
    {
      return response()->json($salarie->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salarie $salarie)
    {
      return response()->json($salarie->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
