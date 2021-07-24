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
                 <div class="card author-box card-success">
                    <div class="card-header"><h4>Details</h4></div>
                    <div class="card-body">
                      <div class="author-box-left">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded author-box-picture" >
                        <div class="clearfix"></div>
                      </div>
                      <div class="author-box-details">
                        <div class="author-box-name">{{ $dosen->nama_dosen }}</div>
                        <div class="author-box-job"> {{ $dosen->jurusan['nama_jurusan'] }}</div>
                        <div class="author-box-description">
                          <p> 
                              NIDN: {{ $dosen->nidn }} &emsp; NIP: {{ $dosen->nip }} &emsp; KTP : {{ $dosen->no_ktp }}  <br>
                              Birth Date & Place : {{ $dosen->tanggal_lahir}}, {{ $dosen->tempat_lahir }} <br>
                              Agama : {{ $dosen->agama }} <br> 
                              Telp : {{ $dosen->no_telp }} &emsp; Phone : {{ $dosen->no_hp }} <br>
                              Email : {{ $dosen->email_dosen }} 
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
        </div>
        </div>
</section>
@endsection