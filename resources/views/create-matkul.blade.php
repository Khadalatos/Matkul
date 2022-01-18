
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Base Mata Kuliah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Menambahkan Matkul</h3>

            </div>
            <div class="card-body">
                <form action="{{ route('simpan-matkul')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="nama" name="semester" class="form-control" placeholder="Semester">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="hari" class="form-control" placeholder="hari">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="matkul" class="form-control" placeholder="matkul">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="dosen" class="form-control" placeholder="dosen">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="jam" class="form-control" placeholder="jam">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="sks" class="form-control" placeholder="sks">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="waktu" class="form-control" placeholder="waktu">
                    </div>

                    <button type="submit" class="btn btn-success">Input</button>
                </form>




            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
