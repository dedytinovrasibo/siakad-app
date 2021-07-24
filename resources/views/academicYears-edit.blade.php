@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('tahunAkademik.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div>     
      <h1>Academic Years</h1>  
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Edit Academic Years</h4></div>
                <div class="card-body">
                  <form action="{{ route('tahunAkademik.update', $tahunAkademik->id ) }}" method="POST">
                    @csrf
                    @method('PATCH')            
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Year</label>
                        <input value="{{ $tahunAkademik->tahun }}" name="tahun" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Year Name</label>
                        <input value="{{ $tahunAkademik->nama_tahun }}" name="nama_tahun" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Semester</label>
                        <input value="{{ $tahunAkademik->semester_mhs }}" name="semester_mhs" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Payment Date</label>
                        <input value="{{ $tahunAkademik->pembayaran_ukt }}" name="pembayaran_ukt" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Credits Date</label>
                        <input value="{{ $tahunAkademik->batas_krs}}" name="batas_krs" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Lectures Start</label>
                        <input value="{{ $tahunAkademik->perkuliahan_awal}}" name="perkuliahan_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Lectures End</label>
                        <input value="{{ $tahunAkademik->perkuliahan_akhir }}" name="perkuliahan_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Mid Test Start</label>
                        <input value="{{ $tahunAkademik->uts_awal }}" name="uts_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Mid Test End</label>
                        <input value="{{ $tahunAkademik->uts_akhir }}" name="uts_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Final Test Start</label>
                        <input value="{{ $tahunAkademik->uas_awal}}" name="uas_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Final Test End</label>
                        <input value="{{ $tahunAkademik->uas_akhir }}" name="uas_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Score Entry</label>
                        <input value="{{ $tahunAkademik->akhir_entry_nilai}}" name="akhir_entry_nilai" type="date" class="form-control col-sm-12 col-md-6" required>
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