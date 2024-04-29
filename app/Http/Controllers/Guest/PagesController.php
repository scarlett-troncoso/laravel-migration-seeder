<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

        $trains = Train::all();
        // dd(Train::all());

        $trainsToday = Train::where('orario_partenza', '>=', (now()))->orderBy('orario_partenza', 'asc')->get();
        // dd($trainsToday);

        return view('home', compact('trains', 'trainsToday'));
    }
}
