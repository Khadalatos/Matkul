
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
              <li class="breadcrumb-item active">Data Matkul</li>
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
                <div class="card-tools">
                    <a href="{{route ('create-matkul')}}" class="btn btn-success">Tambah Matkul<i class="fas fa-plus=square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Semester</th>
                        <th>Hari</th>
                        <th>Matkul</th>
                        <th>Dosen</th>
                        <th>Jam</th>
                        <th>Sks</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtMatkul as $item)
                    <tr>
                        <td>{{$item->semester}}</td>
                        <td>{{$item->hari}}</td>
                        <td>{{$item->matkul}}</td>
                        <td>{{$item->dosen}}</td>
                        <td>{{$item->jam}}</td>
                        <td>{{$item->sks}}</td>
                        <td>{{$item->waktu  }}</td>
                        <td>
                            <a href="{{ url('edit-matkul',$item->id)}}">Edit</a> | <form action="{{ route('delete-matkul',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <BUTTON type="submit">Hapus</BUTTON>
                        </form>
                             </td>

                    </tr>

                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

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
