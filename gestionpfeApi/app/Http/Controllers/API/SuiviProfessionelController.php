<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\SuiviProfessionel;
use Illuminate\Http\Request;

class SuiviProfessionelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(SuiviProfessionel::get(),200)
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
      return response()->json(SuiviProfessionel::create($request->all()), 201)
      ->header('statut', 'infos ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\suivi_professionel  $suivi_professionel
     * @return \Illuminate\Http\Response
     */
    public function show(SuiviProfessionel $suivi_professionel)
    {
      return response()->json($suivi_professionel::all()->find($suivi_professionel->id),200)
      ->header('statut', 'Salarie afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\suivi_professionel  $suivi_professionel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuiviProfessionel $suivi_professionel)
    {
      return response()->json($suivi_professionel->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\suivi_professionel  $suivi_professionel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuiviProfessionel $suivi_professionel)
    {
      return response()->json($suivi_professionel->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
