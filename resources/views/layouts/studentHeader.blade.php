<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SIAKAD</title>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href=" {{ asset('../assets/css/style.css') }}">
  <link rel="stylesheet" href=" {{ asset('../assets/css/components.css') }}">


  <script src="{{ asset('../assets/js/stisla.js') }} "></script>
  <script src="{{ asset('../assets/js/scripts.js') }} "></script>
  <script src="{{ asset('../assets/js/custom.js') }} "></script>
  <script src="{{ asset('../assets/js/page/index-0.js') }} "></script>

  
</head>
<body class="layout-3">
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar bg-primary">
            <a href="" class="navbar-brand sidebar-gone-hide">Festival</a>
            <div class="nav-collapse">
            <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                <i class="fas fa-ellipsis-v"></i>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item active"><a href="#" class="nav-link">Academic</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Application</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Biodata</a></li>
            </ul>
            </div>
            <ul class="navbar-nav navbar-right ml-auto">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="fas fa-sign-out-alt"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                </div>
            </li>
            </ul>
        </nav>
        <div class="main-content">
            @yield('content')
        </div>
          <footer class="main-footer">
            <div class="footer-left">
              Copyright &copy; Festival Collage 2021 
            </div>
          </footer>
    </div>
    </div>
</body>
</html>