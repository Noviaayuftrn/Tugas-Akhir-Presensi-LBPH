<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Mapel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_admin.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <!-- <i class="icon-bell mx-0"></i> -->
          <!-- <span class="count"></span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <!-- <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p> -->
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <!-- <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Just now </p> -->
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <!-- <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Private message </p> -->
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <!-- <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p> -->
            </div>
          </a>
        </div>
      </li>
      <!-- <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="../../assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Settings </a>
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i> Logout </a>
        </div>
      </li> -->
      <!-- <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li> -->
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
      <li class="nav-item">
        <a class="nav-link" href="{{ route('student.index') }}">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Siswa</span>
          <!-- <i class="menu-arrow"></i> -->
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('teacher.index') }}">
          <i class="icon-briefcase menu-icon"></i>
          <span class="menu-title">Guru</span>
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
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="form-group">
                  <label for="jurusanSelect">Jurusan</label>
                  <select class="form-select" id="major_filter" style="color: black !important;">
                      <option value="">Pilih Jurusan</option>
                      @foreach ($majors as $major)
                            <option value="{{ $major->id }}">{{ $major->nama_jurusan ?? $major->name ?? 'Jurusan '.$major->id }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="kelasSelect">Kelas</label>
                  <select class="form-select" id="class_filter" style="color: black !important;">
                      <option value="">Pilih Kelas</option>
                      @foreach ($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->nama_kelas ?? $class->name ?? 'Kelas '.$class->id }}</option>
                      @endforeach
                  </select>
              </div>
              <a href="{{ route('subject.create') }}" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th style="width: 35%;">Mata Pelajaran</th>
                      <th style="width: 35%;">Jurusan</th>
                      <th style="width: 20%;">Kelas</th>
                      <th style="width: 20%;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="subject-table-body">
                    @include('subject.partials.subject_table', ['subjects' => $subjects])
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    {{-- Script untuk dropdown filter --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            // Fungsi untuk load kelas berdasarkan jurusan
            function loadClasses(majorID) {
                if (majorID) {
                    $.ajax({
                        url: '/get-classes/' + majorID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#class_filter').empty();
                            $('#class_filter').append('<option value="">Pilih Kelas</option>');
                            $.each(data, function(key, value) {
                                $('#class_filter').append('<option value="' + value.id + '">' + (value.nama_kelas ?? value.name ?? 'Kelas ' + value.id) + '</option>');
                            });
                        }
                    });
                } else {
                    $('#class_filter').empty();
                    $('#class_filter').append('<option value="">Semua Kelas</option>');
                }
            }

            // Saat jurusan diubah
            $('#major_filter').change(function() {
                var majorID = $(this).val();
                loadClasses(majorID);

                // Opsional: bisa tambahkan filter table disini kalau mau filter daftar guru secara live
                // misalnya pakai AJAX atau Javascript DOM filter
            });

            // Jika mau, bisa tambahkan event change pada #class_filter untuk filter table

        });
    </script>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/sidebar.js"></script>
    <!--Script filter-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/subject-filter.js') }}"></script>
  </body>
</html>