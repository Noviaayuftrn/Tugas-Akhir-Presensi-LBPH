<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guru</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" >
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/logoypt.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <!-- <i class="icon-search"></i> -->
            </span>
          </div>
          <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('teacher.index') }}" aria-controls="form-elements">
        <i class="icon-briefcase menu-icon"></i>
        <span class="menu-title">Guru</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student.index') }}" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Siswa</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('major.index') }}">
        <i class="ti-layout menu-icon"></i>
        <span class="menu-title">Jurusan</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('class.index') }}">
        <i class="ti-blackboard menu-icon"></i>
        <span class="menu-title">Kelas</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('subject.index') }}">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Mata Pelajaran</span>
          <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <h3>Detail Guru</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%;">NIP</th>
                            <th style="width: 20%;">Nama</th>
                            <th style="width: 20%;">Username</th>
                            <th style="width: 20%;">Jurusan</th>
                            <th style="width: 15%;">Kelas</th>
                            <th style="width: 20%;">Mapel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $teacher->nip }}</td>
                            <td>{{ $teacher->user->nama }}</td>
                            <td>{{ $teacher->user->username }}</td>
                            <td>{{ $teacher->major->nama_jurusan ?? '-' }}</td>
                            <td>{{ $teacher->class->nama_kelas ?? '-' }}</td>
                            <td>{{ $teacher->subject->nama_mapel ?? '-' }}</td>
                        </tr>
                    </tbody>
            </table>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{asset('assets/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{asset('assets/js/template.js') }}"></script>
    <script src="{{asset('assets/js/settings.js') }}"></script>
    <script src="{{asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/file-upload.js') }}"></script>
    <script src="{{asset('assets/js/typeahead.js') }}"></script>
    <script src="{{asset('assets/js/select2.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{asset('assets/js/sidebar.js') }}"></script>
  </body>
</html>