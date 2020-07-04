<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();

        return view('entreprises.index' , compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entreprise::create($request->all());
        return redirect('entreprises')->with([
            'statut' => 'Entreprise a été Ajouté avec succès',
            'couleur' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show' , compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit' , compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $entreprise->update($request->all());
	    return redirect('entreprises')->with([
            'statut' => 'Entreprise a été modifié avec succès',
            'couleur' => 'primary'
        ]);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect('entreprises')->with([
            'statut' => 'Entreprise a été supprimé avec succès',
            'couleur' => 'danger'
        ]);
    }
}
