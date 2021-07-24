@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Lecturers</h1>
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
              <h4>Lecturers List</h4>
               <div class="card-header-action">
                  <a href="{{ route('dosen.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
               </div>
             </div>
                   <div class="card-body p-0">
                     <div class="table-responsive">
                      <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Major</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosenList as $list)
                          <tr>
                            <td>{{ $list->jurusan['nama_jurusan'] }}</td>
                            <td> <a href="{{ route('dosen.show',$list->id) }}"> {{ $list->nama_dosen }} </a></td>
                            <td>{{ $list->jenis_kelamin }}</td>
                            <td>{{ $list->no_hp }}</td>
                            <td>{{ $list->no_telp }}</td>
                            <td>{{ $list->email_dosen }}</td>
                            <td> 
                                <form action="{{ route('dosen.destroy',$list->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-icon btn-sm btn-danger data-toggle="tooltip" data-placement="left" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></button>
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
        </div>
</section>
@endsection