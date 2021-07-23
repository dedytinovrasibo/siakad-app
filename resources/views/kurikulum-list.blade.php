@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Curriculum</h1>
    </div>
        <div class="section-body">
  {{-- @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
              <p> {{ $message }} </p>
        </div>
    </div>
@endif --}}
           <div class="card">
             <div class="card-header">
              <h4>Curriculum List</h4>
               <div class="card-header-action">
                  <a href="{{ route('kurikulum.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
               </div>
             </div>
                   <div class="card-body p-0">
                     <div class="table-responsive">
                      <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Tahun Akademik</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Tahun Berjalan</th>
                            <th scope="col">Kode Kurikulum</th>
                            <th scope="col">Nama Kurikulum</th>
                            <th scope="col">SKS Wajib</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($KurikulumList as $klist)
                          <tr>
                            <td>{{ $klist->jurusan->nama_jurusan }}</td>
                            <td>{{ $klist->tahunAkademik['tahun'] }}</td>
                            <td>{{ $klist->semester }}</td>
                            <td>{{ $klist->tahun_berjalan }}</td>
                            <td>{{ $klist->kode_kurikulum }}</td>
                            <td>{{ $klist->nama_kurikulum }}</td>
                            <td>{{ $klist->sks_wajib }}</td>
                            <td> 
                                <form action="{{ route('kurikulum.destroy',$klist->id) }}" method="post">
                                  <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                      <a href="{{ route('kurikulum.edit',$klist->id) }}" class="btn btn-icon btn-sm btn-secondary" data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-icon btn-sm btn-danger data-toggle="tooltip" data-placement="left" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
                                  </div>
                                </form>
                              </td> 
                            @endforeach
                          </tr>
                        </tbody>
                      </table>
  
                     </div>
                  </div>
                </div>   
        </div>
</section>
@endsection