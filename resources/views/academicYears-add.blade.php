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
                <div class="card-header"><h4> Create Academic Years</h4></div>
                <div class="card-body">
                  <form action="{{ route('tahunAkademik.store') }}" method="POST">
                    @csrf            
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Year</label>
                        <input name="tahun" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Year Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Year Name</label>
                        <input name="nama_tahun" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Year Name Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Semester</label>
                          <select  name="semester_mhs" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Semester</option> 
                            @foreach ($thnAkademik as $thn)
                            <option value="{{ $thn->semester_mhs }}">{{ $thn->semester_mhs }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Payment Date</label>
                        <input name="pembayaran_ukt" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Credits Date</label>
                        <input name="batas_krs" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Lectures Start</label>
                        <input name="perkuliahan_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Lectures End</label>
                        <input name="perkuliahan_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Mid Test Start</label>
                        <input name="uts_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Mid Test End</label>
                        <input name="uts_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Final Test Start</label>
                        <input name="uas_awal" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Final Test End</label>
                        <input name="uas_akhir" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Score Entry</label>
                        <input name="akhir_entry_nilai" type="date" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 "></label>
                        <div class="col-sm-12 col-md-7">
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