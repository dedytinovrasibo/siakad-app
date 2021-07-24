<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Program;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
 
    public function index()
    {
        $programList = Program::with('jurusan')->paginate(5);
        return view('program-list', compact('programList'));   
    }

    public function create()
    {
        $jurusanData = Jurusan::all();
        return view('program-add', compact('jurusanData'));
    }

    public function store(Request $request)
    {
        Program::create($request->all());
        return redirect()->route('program.index');
    }

    public function edit(Program $program)
    {
        return view('program-edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $program->update($request->all());
        return redirect()->route('program.index');
    }

    public function destroy(Program $program)
    {
        //
        $program->delete();
        return redirect()->route('program.index');
    }
}
