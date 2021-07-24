@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('jurusan.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div> 
          <h1>Major</h1>
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Create Major</h4></div>
                <div class="card-body">
                  <form action="{{ route('jurusan.store')}}" method="POST">
                    @csrf
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major Name</label>
                        <input name="nama_jurusan" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Major Name Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major Code</label>
                        <input name="kode_jurusan" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Major Code Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Level</label>
                        <input name="jenjang_pendidikan" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Education Level Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Status</label>
                        <select name="status_jurusan" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Status</option>
                            <option  value="Active">Active</option>
                            <option  value="Non-Active">Non-Active</option>
                        </select> 
                        </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Credits</label>
                        <input name="sks_lulus" type="number" class="form-control col-sm-12 col-md-6" required placeholder="Input Credits Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Degree</label>
                        <input name="gelar_akademik" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Degree Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Founded</label>
                        <input name="tanggal_berdiri" type="date" class="form-control col-sm-12 col-md-6" required>
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