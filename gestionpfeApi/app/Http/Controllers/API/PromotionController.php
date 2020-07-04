<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Promotion::get(),200)
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
      return response()->json(Promotion::create($request->all()), 201)
      ->header('statut', 'Promotion ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(promotion $promotion)
    {
      return response()->json($promotion::all()->find($promotion->id),200)
      ->header('statut', 'Promotion afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, promotion $promotion)
    {
      return response()->json($promotion->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotion $promotion)
    {
      return response()->json($promotion->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
