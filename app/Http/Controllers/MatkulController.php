<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kurikulum;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
  
    public function index()
    {
        $matkul = Matakuliah::with('kurikulum')->paginate(10);
        return view('matakuliah-list', compact('matkul'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        $kurikulum = Kurikulum::all();
        return view('matakuliah-add', compact('dosen','kurikulum'));
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah-edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index');
    }
}
