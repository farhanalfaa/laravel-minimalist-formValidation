<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        // mengirim data pegawai ke view index
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view("tambah");
    }

    public function store(Request $request)
    {

        $firstScore  = $request->firstScore;
        $secondScore = $request->secondScore;
        $avgScore = ($firstScore + $secondScore) / 2;

        if ($avgScore > 75) {
            $finalScore = "A";
        } else if ($avgScore > 65) {
            $finalScore = "B";
        } else {
            $finalScore = "C";
        }

        DB::table("mahasiswa")->insert([
            "fullName" => $request->fullName,
            "firstScore" => $request->firstScore,
            "secondScore" => $request->secondScore,
            "finalScore" => $finalScore
        ]);

        return redirect("/");
    }

    public function edit($id)
    {
        $mahasiswa = DB::table("mahasiswa")->where("id", $id)->get();

        return view("edit", ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {

        $firstScore  = $request->firstScore;
        $secondScore = $request->secondScore;
        $avgScore = ($firstScore + $secondScore) / 2;

        if ($avgScore > 75) {
            $finalScore = "A";
        } else if ($avgScore > 65) {
            $finalScore = "B";
        } else {
            $finalScore = "C";
        }

        DB::table("mahasiswa")->where("id", $request->id)->update([
            "fullName" => $request->fullName,
            "firstScore" => $request->firstScore,
            "secondScore" => $request->secondScore,
            "finalScore" => $finalScore
        ]);

        return redirect("/");
    }

    public function hapus($id)
    {
        DB::table("mahasiswa")->where("id", $id)->delete();

        return redirect("/");
    }
}
