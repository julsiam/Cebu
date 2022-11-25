<?php

namespace App\Http\Controllers;

use App\Models\SpouseDeath;

use Illuminate\Http\Request;

class RecordSpouseDeathController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $spouse_death = SpouseDeath::all();
        return view('spouseDeathRequest', compact('spouse_death')); //databasename
    }
}
