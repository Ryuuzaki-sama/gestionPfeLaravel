<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\API\Condjoint;
use Illuminate\Http\Request;

class CondjointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json(Condjoint::get(),200)
      ->header('statut', 'Condjoint afficher avec success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      return response()->json(Condjoint::create($request->all()), 201)
      ->header('statut', 'Condjoint ajout avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API\Condjoint  $condjoint
     * @return \Illuminate\Http\Response
     */
    public function show(Condjoint $condjoint)
    {
      return response()->json($condjoint::all()->find($condjoint->id),200)
      ->header('statut', 'Condjoint afficher avec success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API\Condjoint  $condjoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condjoint $condjoint)
    {
      return response()->json($condjoint->update($request->all()), 201)
      ->header('statut', 'Mise a jour effectuer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API\condjoint  $condjoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(condjoint $condjoint)
    {
      return response()->json($condjoint->delete(), 401)
      ->header('statut', 'Suppression effectuer avec success');
    }
}
