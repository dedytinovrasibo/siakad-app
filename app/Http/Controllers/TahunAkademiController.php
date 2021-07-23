<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademiController extends Controller
{
    public function index()
    {
        $thnAkademik = TahunAkademik::all();
        return view('academicYears-list',compact('thnAkademik'));
    }

    public function create()
    {
        $thnAkademik = TahunAkademik::all();
        return view('academicYears-add', compact('thnAkademik'));
    }

    public function store(Request $request)
    {
        TahunAkademik::create($request->all());
        return redirect()->route('tahunAkademik.index');
    } 

    public function edit(TahunAkademik $tahunAkademik)
    {
        return view('academicYears-edit', compact('tahunAkademik'));
    }

    public function update(Request $request, TahunAkademik $tahunAkademik)
    {
        $tahunAkademik->update($request->all());
        return redirect()->route('tahunAkademik.index');
    }

    public function destroy(TahunAkademik $tahunAkademik)
    {
        $tahunAkademik->delete();
        return redirect()->route('tahunAkademik.index');
    }
}
