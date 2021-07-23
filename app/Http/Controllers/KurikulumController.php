<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Jurusan;
use App\Models\TahunAkademik;

use Illuminate\Http\Request;


class KurikulumController extends Controller
{

    public function index()
    {
        $KurikulumList = Kurikulum::with('jurusan')->paginate(10);
        return view('kurikulum-list', compact('KurikulumList'));
    }

    public function create(){

        $JurusanData = Jurusan::all();
        $thnAkademik = TahunAkademik::all();
        return view('kurikulum-add',compact('JurusanData','thnAkademik'));
    }

    public function store(Request $request)
    {      
        // make validation method
        // $this->addValidation($request);
        // $this->validate($request, [
        //     'id_jurusan' => 'required',
        //     `id_tahunAkademik` => 'required',
        //     'semester' => 'required',
        //     'tahun_berjalan' => 'required',
        //     'kode_kurikulum' => 'required',
        //     'nama_kurikulum' => 'required',
        //     'sks_wajib' => 'required',
        // ]);
        Kurikulum::create($request->all());
       
        return redirect()->route('kurikulum.index')->with('success','Curriculum is successfully saved');
    }

    public function edit(Kurikulum $kurikulum)
    {
        return view('kurikulum-edit', compact('kurikulum'));
    }

    public function update(Request $request, Kurikulum $kurikulum)
    {
        //
        // $request->validate([
        //     'id_jurusan' => 'required',
        //     `id_tahunAkademik` => 'required',
        //     'semester' => 'required',
        //     'tahun_berjalan' => 'required',
        //     'kode_kurikulum' => 'required',
        //     'nama_kurikulum' => 'required',
        //     'sks_wajib' => 'required'
        // ]);
        $kurikulum->update($request->all());
        return redirect()->route('kurikulum.index');
    }

    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum->delete();
        return redirect()->route('kurikulum.index');
    }
}

