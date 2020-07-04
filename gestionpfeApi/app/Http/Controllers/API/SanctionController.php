<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\Sanction;
use Illuminate\Http\Request;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Sanction::get(),200)
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
      return response()->json(Sanction::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function show(Sanction $sanction)
    {
      return response()->json($sanction::all()->find($sanction->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanction $sanction)
    {
      return response()->json($sanction->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanction $sanction)
    {
      return response()->json($sanction->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
