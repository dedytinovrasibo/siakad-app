@extends('layouts.template')
@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('kurikulum.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div>     
      <h1>Curriculum</h1>  
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Create Curriculum</h4></div>
                <div class="card-body">
                  <form action="{{ route('kurikulum.store') }}" method="POST">
                    @csrf
                          <div class="form-group row mb-4">
                          <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major</label>
                          <select name="id_jurusan" class="form-control col-sm-12 col-md-6">
                              <option selected disabled>Select Major</option>
                              @foreach ($JurusanData as $j)
                              <option  value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group row mb-4">
                          <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Academic Years</label>
                          <select  name="id_tahunAkademik"  class="form-control col-sm-12 col-md-6">
                              <option selected disabled>Select Academic Years</option> 
                              @foreach ($thnAkademik as $thn)
                              <option value="{{ $thn->id }}">{{ $thn->nama_tahun }}</option>
                              @endforeach
                          </select>
                          </div>
                    
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Semester</label>
                        <input name="semester" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Semester Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Implementation Year</label>
                        <input name="tahun_berjalan" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Tahun Berjalan Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Curriculum Code</label>
                        <input name="kode_kurikulum" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Kode Kurikulum Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Curriculum Name</label>
                        <input name="nama_kurikulum" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Nama Kurikulum Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Required Credits</label>
                        <input name="sks_wajib" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input SKS Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 "></label>
                        <div class="col-sm-12 col-md-7">
                          {{-- <a href="{{ route('kurikulum.index') }}" type="button" class="btn btn-secondary">Back</a> --}}
                          <button type="submit" class="btn btn-primary">Create</button>
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