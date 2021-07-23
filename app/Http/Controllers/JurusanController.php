<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;

use Illuminate\Http\Request;

class JurusanController extends Controller
{

    public function index()
    {
        $JurusanList = Jurusan::all();
        return view('major-list', compact('JurusanList'));
    }

    public function create()
    {
        return view('major-add');
    }

    public function store(Request $request)
    {
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success','Major is successfully saved');

    }

    public function edit(Jurusan $jurusan)
    {
        return view('major-edit', compact('jurusan'));
    }

   
    public function update( Request $request, Jurusan $jurusan)
    {
        $jurusan->update($request->all());
        return redirect()->route('jurusan.index');
    }

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }
}
