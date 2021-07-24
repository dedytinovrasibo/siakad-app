@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('dosen.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div> 
          <h1>Lecturer</h1>
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Create Lecturer</h4></div>
                <div class="card-body">
                  <form action="{{ route('dosen.store')}}" method="POST">
                    @csrf
                        <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Major</label>
                        <select name="id_jurusan" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Major</option>
                            @foreach ($jurusan as $item)
                                <option value="{{ $item->id}}">{{$item->nama_jurusan}}</option>
                            @endforeach
                        </select> 
                        </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">NIDN</label>
                        <input name="nidn" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input NIDN Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">NIP</label>
                        <input name="nip" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input NIP Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Full Name</label>
                        <input name="nama_dosen" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Full Name Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Birth Date</label>
                        <input name="tanggal_lahir" type="date" class="form-control col-sm-12 col-md-6" required >
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Birth Place</label>
                        <input name="tempat_lahir" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Birth Place Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Gender</label>
                        <select name="jenis_kelamin" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Gender</option>
                            <option  value="Man">Man</option>
                            <option  value="Woman">Woman</option>
                        </select> 
                        </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Religion</label>
                        <input name="agama" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Religion Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">KTP</label>
                        <input name="no_ktp" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input KTP Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Phone</label>
                        <input name="no_hp" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Phone Number Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Telp</label>
                        <input name="no_telp" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Telphone Number Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-labell">Email</label>
                        <input name="email_dosen" type="email" class="form-control col-sm-12 col-md-6" required placeholder="Input Email Here...">
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