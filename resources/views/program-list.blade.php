@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Program</h1>
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
                            <h4>Program List</h4>
                            <div class="card-header-action">
                                <a href="{{ route('program.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
                            </div>
                        </div>        
                    <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Kode Program</th>
                            <th scope="col">Nama Program</th>
                            <th scope="col">Status Program</th>
                            <th scope="col">Tanggal Berdiri</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($programList as $plist)
                          <tr>
                            <td>{{ $plist->jurusan->nama_jurusan }}</td>
                            <td>{{ $plist->kode_program }}</td>
                            <td>{{ $plist->nama_program }}</td>
                            <td>
                              @if ($plist->status_program == 'Active')
                                <div class="badge badge-success"> {{ $plist->status_program }} </div>
                              @else
                                <div class="badge badge-danger"> {{ $plist->status_program }} </div>
                              @endif
                            </td>
                            <td>{{ $plist->tanggal_berdiri }}</td>
                            <td > 
                                <form action="{{ route('program.destroy',$plist->id) }}" method="post">
                                  <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                      <a href="{{ route('program.edit',$plist->id) }}" class="btn btn-sm btn-icon btn-secondary data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit"><i class="far fa-edit"></i></a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-sm btn-icon btn-danger data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
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