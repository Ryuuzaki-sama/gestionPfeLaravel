<?php

namespace App\Http\Controllers;

use App\Salarie;
use Illuminate\Http\Request;

class SalarieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salarie::all();

        return view('salaries.index' , compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salarie::create($request->all());
        return redirect('salarie')->with([
            'statut' => 'Salarié a été Ajouté avec succès',
            'couleur' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function show(Salarie $salarie)
    {
        return view('salarie.show' , compact('salarie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function edit(Salarie $salarie)
    {
        return view('salarie.edit' , compact('salarie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salarie $salarie)
    {
        $salarie->update($request->all());
	    return redirect('salarie')->with([
            'statut' => 'Salarié a été modifié avec succès',
            'couleur' => 'primary'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salarie $salarie)
    {
        $salarie->delete();
        return redirect('salarie')->with([
            'statut' => 'Salarié a été supprimé avec succès',
            'couleur' => 'danger'
        ]);
    }
}
