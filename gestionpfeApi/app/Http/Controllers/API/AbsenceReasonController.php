<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\AbsenceReason;
use Illuminate\Http\Request;

class AbsenceReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(AbsenceReason::get(),200)
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
      return response()->json(AbsenceReason::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\raison_absence_legal  $raison_absence_legal
     * @return \Illuminate\Http\Response
     */
    public function show(AbsenceReason $raison_absence_legal)
    {
      return response()->json($raison_absence_legal::all()->find($raison_absence_legal->id),200)
      ->header('statut', "raison d'absence afficher avec success");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\raison_absence_legal  $raison_absence_legal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbsenceReason $raison_absence_legal)
    {
      return response()->json($raison_absence_legal->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\raison_absence_legal  $raison_absence_legal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsenceReason $raison_absence_legal)
    {
      return response()->json($raison_absence_legal->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
