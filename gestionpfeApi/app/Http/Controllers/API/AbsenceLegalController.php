<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\AbsenceLegal;
use Illuminate\Http\Request;

class AbsenceLegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(AbsenceLegal::get(),200)
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
      return response()->json(AbsenceLegal::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\absence_legal  $absence_legal
     * @return \Illuminate\Http\Response
     */
    public function show(AbsenceLegal $absence_legal)
    {
      return response()->json($absence_legal::all()->find($absence_legal->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\absence_legal  $absence_legal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbsenceLegal $absence_legal)
    {
      return response()->json($absence_legal->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\absence_legal  $absence_legal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsenceLegal $absence_legal)
    {
      return response()->json($absence_legal->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
