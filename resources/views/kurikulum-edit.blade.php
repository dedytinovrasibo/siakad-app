@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('kurikulum.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div> 
          <h1>Edit Curriculum</h1>
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Edit Curriculum</h4></div>
                <div class="card-body">
                  <form action="{{ route('kurikulum.update',$kurikulum->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                          <div class="form-group row  mb-4">
                          <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major</label>
                          <select name="id_jurusan" class="form-control col-sm-6">                                
                            <option selected disabled value="{{ $kurikulum->id_jurusan }}"> {{ $kurikulum->jurusan['nama_jurusan'] }}</option>
                          </select>
                          </div>
                          <div class="form-group row mb-4">
                          <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Academic Years</label>
                          <select  name="id_tahunAkademik"  class="form-control col-sm-6">
                              <option selected disabled value="{{ $kurikulum->id_tahunAkademik }}"> {{ $kurikulum->tahunAkademik['tahun']}} </option>                            
                          </select>
                          </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Semester</label>
                        <input value="{{$kurikulum->semester}}" name="semester" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Semester Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Implementation Year</label>
                        <input value="{{$kurikulum->tahun_berjalan}}" name="tahun_berjalan" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Tahun Berjalan Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Curriculum Code</label>
                        <input value="{{$kurikulum->kode_kurikulum}}" name="kode_kurikulum" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Kode Kurikulum Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Curriculum Name</label>
                        <input value=" {{ $kurikulum->nama_kurikulum }}" name="nama_kurikulum" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Nama Kurikulum Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Required Credits</label>
                        <input value=" {{ $kurikulum->sks_wajib }}" name="sks_wajib" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input SKS Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 "></label>
                        <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                     </div>
                  </form>
            </div>
            </div>
          </div>
        </div>
</section>
@endsection