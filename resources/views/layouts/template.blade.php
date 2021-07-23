@extends('layouts.header')

@section('app')

<div class="main-wrapper">
<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        <!-- Search Section -->
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">Contoh History</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>   
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <!-- Message Section
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Mahasiswa</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> -->
          
            <!-- Notif Section -->
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Contoh Notifikasi
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> 

          <!-- User Profile -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src=" {{ asset('../assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Super Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Sidebar Section -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">SIAKAD</a>
          </div>
          <!-- <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div> -->
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a href=""><i class="fas fa-home"></i><span>Dashboard</span></a></li>
              <li class="menu-header">Master</li>
              <li><a class="nav-link" href="{{ route('tahunAkademik.index') }}"><i class="fas fa-calendar"></i> <span>Academic Years</span></a></li>
              <li class="nav-item dropdown">
                <a class="nav-link has-dropdown"><i class="fas fa-university"></i> <span>Study</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('jurusan.index')}}">Major</a></li>
                  <li><a class="nav-link" href="{{ route('program.index') }} ">Program</a></li>
              </ul>
              </li>
              <li><a class="nav-link" href="{{ route('kurikulum.index')}}"><i class="fas fa-book-open"></i> <span>Curriculum</span></a></li>
              <li class="nav-item dropdown">
                <a class="nav-link has-dropdown text-danger"><i class="fas fa-money-bill-alt"></i> <span>Finance</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-danger" href="#">Registration</a></li>
                    <li><a class="nav-link text-danger" href="#">Tuition</a></li>
                </ul>
              <li class="menu-header">Academic</li>
              <li><a class="nav-link" href="{{ route('matakuliah.index')}}"><i class="fas fa-swatchbook"></i> <span>Courses</span></a></li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-clock"></i> <span>Schedule</span></a></li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-pencil-ruler"></i> <span>Study Credit</span></a></li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-clipboard"></i> <span>Score</span></a></li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-building"></i> <span>Class</span></a></li>
              <li class="menu-header">Lecturer & Staff</li>
              <li><a class="nav-link" href="{{ route('dosen.index')}}"><i class="fas fa-user-tie"></i> <span>Lecturer</span></a></li>
              <li class="menu-header">Students</li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-user-check"></i><span>New Student</span></a></li>
              <li><a class="nav-link text-danger" href="#"><i class="fas fa-user-friends"></i> <span>Student</span></a></li>
            </ul>
        </aside>
      </div>
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 
        </div>
      </footer>
</div>
@endsection