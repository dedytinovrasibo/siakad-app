@extends('layouts.template')
@section('content')

        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Student</h4>
                  </div>
                  <div class="card-body">
                    135
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-user-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>New Student</h4>
                  </div>
                  <div class="card-body">
                    5
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Lecturer</h4>
                  </div>
                  <div class="card-body">
                    5
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-user-graduate"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Alumni</h4>
                  </div>
                  <div class="card-body">
                    100
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Newsletter</h4>
                </div>
                <div class="card-body">
                 <form method="post" class="needs-validation">
                    <div class="form-group">
                      <label>Title</label>
                      <div class="col-sm-6">
                        <input type="text" name="title" class="form-control" required>
                      </div>
                      <div class="invalid-feedback">
                        Field is blank. Please fill in the title!
                      </div>
                    </div>
                    <div class="form-group">
                    <label>Content</label>
                      <div class="col-sm-12">
                        <textarea class="form-control"></textarea>
                      </div>
                    </div>
                 </form>
                </div>
                <div class="card-footer pt-0">
                    <button class="btn btn-primary">Post</button>
                  </div>
              </div>
            </div>
            
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Posts</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Pembukaan Pendaftaran Mahasiswa Baru
                            <div class="table-links">
                              <a href="#">Registration Now</a>
                            </div>
                          </td>
                          <td>
                          <div class="btn-group mb-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>
                            Kuliah Tamu Online 10 Agustus 2021
                            <div class="table-links">
                              <a href="#">Zoom Link</a>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group mb-1" role="group" aria-label="Basic example">
                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                            </div>                          
                        </td>
                        </tr>
                        <tr>
                          <td>
                            Seputar Kampus Festival Collage
                            <div class="table-links">
                              <a href="#">Click Here</a>
                            </div>
                          </td>
                          <td>
                          <div class="btn-group mb-1" role="group" aria-label="Basic example">
                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                          </div>
                          </td>
                        </tr>                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection