<?php

namespace App\Http\Controllers\API;

use App\API\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json(Region::get(),200)
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
    return response()->json(Region::create($request->all()), 201)
    ->header('statut', 'infos ajout avec success');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\API\salarie_entre  $salarie_entre
   * @return \Illuminate\Http\Response
   */
  public function show(Region $region)
  {
    return response()->json($region::all()->find($region->id),200)
    ->header('statut', 'Salarie afficher avec success');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\API\salarie_entre  $salarie_entre
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Region $region)
  {
    return response()->json($region->update($request->all()), 201)
    ->header('statut', 'Mise a jour effectuer avec success');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\API\salarie_entre  $salarie_entre
   * @return \Illuminate\Http\Response
   */
  public function destroy(Region $region)
  {
    return response()->json($region->delete(), 401)
    ->header('statut', 'Suppression effectuer avec success');
  }
}
