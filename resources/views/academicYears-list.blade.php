@extends('layouts.template')
@section('content')

<section class="section">
    <div class="section-header">
            <h1>Academic Years</h1>
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
              <h4>Academic Years List</h4>
               <div class="card-header-action">
                  <a href="{{ route('tahunAkademik.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add</a>
               </div>
             </div>
                   <div class="card-body p-0">
                     <div class="table-responsive">
                      <table class="table table-stripped table-md">
                        <thead>
                          <tr>
                            <th scope="col">Years</th>
                            <th scope="col">Year Name</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Credits</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col">Score Entry</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($thnAkademik as $talist)
                          <tr>
                            <td>{{ $talist->tahun }}</td>
                            <td>{{ $talist->nama_tahun }}</td>
                            <td>{{ $talist->semester_mhs }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Payment Due Date" data-original-title="Payment Due Date">{{ $talist->pembayaran_ukt }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Credits Due Date" data-original-title="Credits Due Date" >{{ $talist->batas_krs }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Lectures Date" data-original-title="Lectures Date">{{ $talist->perkuliahan_awal }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Lectures Date" data-original-title="Lectures Date">{{ $talist->perkuliahan_akhir }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Mid Test Date" data-original-title="Mid Test Date">{{ $talist->uts_awal }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Mid Test Date" data-original-title="Mid Test Date">{{ $talist->uts_akhir }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Final Test" data-original-title="Final Test Date">{{ $talist->uas_awal }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Final Test" data-original-title="Final Test Date">{{ $talist->uas_akhir }}</td>
                            <td data-toggle="tooltip" data-placement="left" title="Due Date" data-original-title="Due Date">{{ $talist->akhir_entry_nilai }}</td>
                            <td> 
                                <form action="{{ route('tahunAkademik.destroy', $talist->id)}}" method="post">
                                  <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                      <a href="{{  route('tahunAkademik.edit',$talist->id) }}" class="btn btn-icon btn-sm btn-secondary" data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit"><i class="far fa-edit"></i></a>
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