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
                <div class="card-header"><h4>Edit Major</h4></div>
                <div class="card-body">
                  <form action="{{ route('jurusan.update',$jurusan->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major Name</label>
                        <input value="{{$jurusan->nama_jurusan}}" name="nama_jurusan" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major Code</label>
                        <input value="{{$jurusan->kode_jurusan}}" name="kode_jurusan" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Level</label>
                        <input value="{{$jurusan->jenjang_pendidikan}}" name="jenjang_pendidikan" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Status</label>
                        <select name="status_jurusan" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>{{ $jurusan->status_jurusan}}</option>
                            @if ($jurusan->status_jurusan == 'Active' )
                            <option value="Non-Active">Non-Active</option>
                            @else
                            <option value="Active">Active</option>
                            @endif
                        </select> 
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Credits</label>
                        <input value=" {{ $jurusan->sks_lulus}}" name="sks_lulus" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Degree</label>
                        <input value=" {{ $jurusan->gelar_akademik}}" name="gelar_akademik" type="text" class="form-control col-sm-12 col-md-6" required>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Founded</label>
                        <input value=" {{ $jurusan->tanggal_berdiri}}" name="tanggal_berdiri" type="text" class="form-control col-sm-12 col-md-6" required>
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