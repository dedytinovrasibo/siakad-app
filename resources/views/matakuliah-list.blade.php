@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Courses</h1>
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
                            <h4>Courses List</h4>
                            <div class="card-header-action">
                                <a href="{{ route('matakuliah.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
                            </div>
                        </div>        
                    <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Curriculum</th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col" data-toggle="tooltip" data-placement="right" title="Practice Credits">Practice</th>
                            <th scope="col" data-toggle="tooltip" data-placement="right" title="Theory Credits">Theory</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            <th scope="col" data-toggle="tooltip" data-placement="right" title="Minimum Score">Minimum</th>
                            <th scope="col">Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($matkul as $list)
                          <tr>
                            <td data-toggle="tooltip" data-placement="right" title="{{$list->kurikulum['nama_kurikulum']}}">{{ $list->kurikulum['kode_kurikulum'] }}</td>
                            <td>{{ $list->kode_matakuliah }}</td>
                            <td>{{ $list->nama_matakuliah }}</td>
                            <td>{{ $list->sks_praktek }}</td>
                            <td>{{ $list->sks_teori }}</td>
                            <td>
                                @if ($list->jenis_matakuliah == 'Required')
                                <div class="badge badge-success"> {{ $list->jenis_matakuliah }} </div>
                                @else
                                <div class="badge badge-info"> {{ $list->jenis_matakuliah }} </div>
                                @endif
                            </td>
                            <td>
                                @if ($list->status_matakuliah == 'Active')
                                <div class="badge badge-success"> {{ $list->status_matakuliah }} </div>
                                @else
                                <div class="badge badge-danger"> {{ $list->status_matakuliah }} </div>
                                @endif
                            </td>
                            <td>{{ $list->nilai_minimal_lulus }}</td>
                            <td > 
                                <form action="{{ route('matakuliah.destroy',$list->id) }}" method="post">
                                  <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                      <a href="{{ route('matakuliah.edit',$list->id) }}" class="btn btn-sm btn-icon btn-secondary data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit"><i class="far fa-edit"></i></a>
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