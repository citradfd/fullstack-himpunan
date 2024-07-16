<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index() {
        $anggota = DB::table('anggota')->get();
        return view('index',['anggota' => $anggota]);
    }
    public function tambah() {
        return view('tambah');
    }
    public function store(Request $request) {
        DB::table('anggota')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect('/anggota');
    }
}
