@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('matakuliah.index') }}" class="btn btn-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
      </div>     
      <h1>Courses</h1>  
    </div>
        <div class="section-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header"><h4>Edit Courses</h4></div>
                <div class="card-body">
                  <form action="{{ route('matakuliah.update',$matakuliah->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                          <div class="form-group row mb-4">
                          <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Curriculum</label>
                          <select name="id_kurikulum" class="form-control col-sm-12 col-md-6">
                                <option selected disabled readonly>{{ $matakuliah->kurikulum['nama_kurikulum'] }}</option>
                          </select>
                          </div>           
                          <div class="form-group row mb-4">
                            <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Lecturer</label>
                            <select name="id_dosen" class="form-control col-sm-12 col-md-6">
                                <option selected disabled value="" ></option>
                            </select>
                            </div>          
                            <div class="form-group row mb-4">
                                <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Course Code</label>
                                <input name="kode_matakuliah" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Course Name Here...">
                              </div>      
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Course Name</label>
                        <input name="nama_matakuliah" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Course Name Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Theory Credits</label>
                        <input name="sks_teori" type="number" class="form-control col-sm-12 col-md-6" required placeholder="Input Theory Credits Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Practical Credits</label>
                        <input name="sks_praktek" type="number" class="form-control col-sm-12 col-md-6" required placeholder="Input Practical Credits Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Semester</label>
                        <input name="semester" type="number" class="form-control col-sm-12 col-md-6" required placeholder="Input Semester Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Course Status</label>
                        <select name="status_matakuliah" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Course Status</option>
                            <option value="Active">Active</option>
                            <option value="Non-Active">Non-Active</option>
                        </select> 
                        </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Course Type</label>
                        <select name="status_matakuliah" class="form-control col-sm-12 col-md-6">
                            <option selected disabled>Select Course Type</option>
                            <option value="Required">Required</option>
                            <option value="Optional">Optional</option>
                        </select> 
                        </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Syllabus</label>
                        <input name="silabus" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Syllabus Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Learning Materials</label>
                        <input name="bahan_ajar" type="text" class="form-control col-sm-12 col-md-6" required placeholder="Input Learning Materials Here...">
                      </div>
                      <div class="form-group row mb-4">
                        <label class="text-md-right col-12 col-md-3 col-lg-3 col-form-label">Minimum Score</label>
                        <input name="nilai_minimal_lulus" type="number" class="form-control col-sm-12 col-md-6" min="1" max="4" step="0.01" required placeholder="Input Minimum Score Required Here...">
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