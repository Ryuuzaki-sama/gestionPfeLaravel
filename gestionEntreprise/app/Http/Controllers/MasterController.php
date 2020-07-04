<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salarie;
use App\Entreprise;

class MasterController extends Controller
{
    public function index()
    {
        $salaries = Salarie::all();
        $entreprises = Entreprise::all();
        

        return view('master' , compact('entreprises','salaries'));
    }
}
