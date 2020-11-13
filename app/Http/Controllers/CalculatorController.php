<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function formulir(){
        return view("welcome");
    }

    public function hitung(Request $request){
        $firstScore = $request->input("firstScore");
        $secondScore = $request->input("secondScore");
        $avgScore = $firstScore * $secondScore;
        return "Score : ".$avgScore;
    }
}
