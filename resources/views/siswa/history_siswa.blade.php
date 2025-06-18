<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Presensi</title>
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
    <a class="navbar-brand brand-logo me-5" href="{{ route('siswa.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_siswa.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('siswa.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
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
      <a class="nav-link" href="{{ route('siswa.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student.attendance') }}" aria-controls="form-elements">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Presensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student..history') }}">
        <i class="icon-check menu-icon"></i>
        <span class="menu-title">Riwayat Absen</span>
      </a>
  
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="form-group">
              </div>
              <h4 class="mb-3">Catatan Kehadiran</h4>
              <form method="GET" action="{{ route('student..history') }}" class="mb-4">
                <div class="d-flex align-items-center gap-2">
                  <select name="sub_id" id="sub_id" class="form-select" style="width: 300px; color: black;">
                    <option value="" {{ request('sub_id') == '' ? 'selected' : '' }} disabled hidden>Pilih Mata Pelajaran</option>
                    <option value="">Semua Mata Pelajaran</option>
                    @foreach ($subjects as $subject)
                      <option value="{{ $subject->id }}" {{ request('sub_id') == $subject->id ? 'selected' : '' }}>
                        {{ $subject->nama_mapel }}
                      </option>
                    @endforeach
                  </select>
                  <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
              </form>
              <br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width:5%;">No</th>
                    <th style="width:30%;">Guru Pengajar</th>
                    <th style="width:30%;">Mata Pelajaran</th>
                    <th style="width:30%;">Status Kehadiran</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($attendances as $i => $att)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $att->schedule->teacher->user->nama ?? '-' }}</td>
                        <td>{{ $att->schedule->subject->nama_mapel ?? '-' }}</td>
                        <td>
                            @php
                                $badge = [
                                    'hadir' => 'success',
                                    'sakit' => 'warning',
                                    'izin'  => 'primary',
                                    'alpa'  => 'danger'
                                ];
                            @endphp
                            <span class="badge bg-{{ $badge[$att->status] ?? 'secondary' }}">
                                {{ ucfirst($att->status) }}
                            </span>
                        </td>
                    </tr>
                @empty
                  <tr>
                    <td colspan="4" class="text-center">Tidak ada data kehadiran</td>
                  </tr>  
                @endforelse
                </tbody>
              </table>
              <!-- <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data Guru</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" placeholder="NIP">
                      </div>
                      <div class="form-group">
                        <label for="namaguru">Nama Guru</label>
                        <input type="text" class="form-control" id="namaguru" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="pilihjurusan">Jurusan</label>
                        <select class="form-select" id="pilihjurusan">
                          <option selected disabled>Pilih Jurusan</option>
                          <option style="color: black;">Desain Komunikasi Visual / Multimedia</option>
                          <option style="color: black;">Teknik Ketenagalistrikan</option>
                          <option style="color: black;">Teknik Mesin</option>
                          <option style="color: black;">Teknik Otomotif</option>
                          <option style="color: black;">Teknik Komputer Jaringan</option>        
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pilihkelas">Kelas</label>
                        <select class="form-select" id="pilihkelas">
                          <option selected disabled>Pilih Kelas</option>
                          <option style="color: black;">X</option>
                          <option style="color: black;">XI</option>
                          <option style="color: black;">XII</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pilihmapel">Mata Pelajaran</label>
                        <select class="form-select" id="pilihmapel">
                          <option selected disabled>Pilih Mapel</option>
                          <option style="color: black;">Mapel1</option>
                          <option style="color: black;">Mapel2</option>
                          <option style="color: black;">Mapel3</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <button class="btn btn-danger" style="color: white;">Kembali</button>
                    </form>
                  </div>
                </div>
              </div> -->
            </div>
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