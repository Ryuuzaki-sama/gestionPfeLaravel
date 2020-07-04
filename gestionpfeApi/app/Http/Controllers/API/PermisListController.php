<?php

namespace App\Http\Controllers\API;

use App\API\PermisList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermisListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(PermisList::get(),200)
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
      return response()->json(PermisList::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\PermisList  $permisList
     * @return \Illuminate\Http\Response
     */
    public function show(PermisList $permisList)
    {
      return response()->json($permisList::all()->find($permisList->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\PermisList  $permisList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermisList $permisList)
    {
      return response()->json($permisList->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\PermisList  $permisList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermisList $permisList)
    {
      return response()->json($permisList->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
