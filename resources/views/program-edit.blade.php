@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('program.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div> 
          <h1>Edit Program</h1>
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Edit Program</h4></div>
                <div class="card-body">
                    <form action="{{ route('program.update',$program->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row mb-4">
                              <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Jurusan</label>
                              <select name="id_jurusan" class="form-control col-sm-12 col-md-6">
                                  <option selected disabled value="{{ $program->id_jurusan }}">{{ $program->jurusan['nama_jurusan'] }}</option>
                              </select>
                              </div>                    
                          <div class="form-group row mb-4">
                            <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Program Code</label>
                            <input value="{{ $program->kode_program }}" name="kode_program" type="text" class="form-control col-sm-12 col-md-6" required>
                          </div>
                          <div class="form-group row mb-4">
                            <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Program Name</label>
                            <input value="{{ $program->nama_program}}" name="nama_program" type="text" class="form-control col-sm-12 col-md-6" required>
                          </div>
                          <div class="form-group row mb-4">
                            <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Status</label>
                            <select name="status_program" class="form-control col-sm-12 col-md-6">
                                <option selected disabled>{{ $program->status_program }}</option>
                                  @if ($program->status_program == 'Active' )
                                  <option value="Non-Active">Non-Active</option>
                                  @else
                                  <option value="Active">Active</option>
                                  @endif
                            </select> 
                            </div>
                          <div class="form-group row mb-4">
                            <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Founded Date</label>
                            <input value="{{ $program->tanggal_berdiri }}" name="tanggal_berdiri" type="date" class="form-control col-sm-12 col-md-6" required>
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