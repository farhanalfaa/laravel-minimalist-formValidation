<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }

    public function hitung(Request $request)
    {
        $firstScore  = $request->input('firstScore');
        $secondScore = $request->input('secondScore');
        $avgScore = ($firstScore + $secondScore) / 2;

        if ($avgScore > 75) {
            $result = "A";
        } else if ($avgScore > 65) {
            $result = "B";
        } else {
            $result = "C";
        }

        return redirect('/')->with('message', "Your Score = " . $result);
    }
}

// $request->validate([
//     'title' => 'required|unique:posts|max:255',
//     'v1\.0' => 'required',
// ]);