<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index()
    {
        $dosenList = Dosen::with('jurusan')->paginate(5);
        return view('dosen-list', compact('dosenList'));
    }

    public function create()
    {
        $jurusan = Jurusan::all();
        return view('dosen-add', compact('jurusan'));
    }

    public function store(Request $request)
    {
        //Dosen::create($request->all());
        dd($request->all());
        return redirect()->route('dosen.index')->with('success','Major is successfully saved');
    }

    public function show(Dosen $dosen){
        return view('dosen-detail', compact('dosen'));
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}
