@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Major</h1>
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
              <h4>Major List</h4>
               <div class="card-header-action">
                  <a href="{{ route('jurusan.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
               </div>
             </div>
                   <div class="card-body p-0">
                     <div class="table-responsive">
                      <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Major Name</th>
                            <th scope="col">Major Code</th>
                            <th scope="col">Level</th>
                            <th scope="col">Status</th>
                            <th scope="col">Credits</th>
                            <th scope="col">Degree</th>
                            <th scope="col">Founded</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($JurusanList as $jlist)
                          <tr>
                            <td>{{ $jlist->nama_jurusan }}</td>
                            <td>{{ $jlist->kode_jurusan }}</td>
                            <td>{{ $jlist->jenjang_pendidikan }}</td>
                            <td>
                                @if ($jlist->status_jurusan == 'Active')
                                  <div class="badge badge-success"> {{$jlist->status_jurusan}} </div>
                                @else
                                  <div class="badge badge-danger"> {{$jlist->status_jurusan}} </div>
                                @endif
                              </td>
                            <td>{{ $jlist->sks_lulus }}</td>
                            <td>{{ $jlist->gelar_akademik}}</td>
                            <td>{{ $jlist->tanggal_berdiri }}</td>
                            <td> 
                                <form action="{{ route('jurusan.destroy',$jlist->id) }}" method="post">
                                  <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                      <a href="{{ route('jurusan.edit',$jlist->id) }}" class="btn btn-icon btn-sm btn-secondary" data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit"><i class="far fa-edit"></i></a>
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