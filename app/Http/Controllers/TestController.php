<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function tex() {
//        $reservations = \DB::select('select * from reservations');
//        view('reservations', ['reservations' => $reservations]);

        $drivers = \DB::table('drivers')->get();

        return view('drivers', ['drivers' => $drivers]);


    }
}
