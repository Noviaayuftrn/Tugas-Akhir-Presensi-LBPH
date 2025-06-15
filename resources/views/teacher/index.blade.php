<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guru</title>
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
      <a class="nav-link" href="{{ route('student.index') }}">
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

            @if(session('success'))
                <div style="color: green;">{{ session('success') }}</div>
            @endif

            <div class="row">
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
            <a href="{{ route('teacher.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 3%;">No.</th>
                        <th style="width: 10%;">NIP</th>
                        <th style="width: 20%;">Nama</th>
                        <th style="width: 20%;">Username</th>
                        <th style="width: 20%;">Mata Pelajaran</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody id="teacher-table-body">
                    @include('teacher.partials.teacher_table', ['teachers' => $teachers])
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
                    $('#class_filter').append('<option value="">Pilih Kelas</option>');
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
    <!-- Custom script for teacher filter -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/teacher-filter.js') }}"></script>
  </body>
</html>
