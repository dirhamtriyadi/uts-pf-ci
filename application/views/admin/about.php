<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('admin/_partials/navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/_partials/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
		<div class="d-flex justify-content-center">
			<div class="d-flex flex-column text-center">
				<div class="mb-3">
					<h1>About Me</h1>
				</div>
				<div class="d-flex justify-content-center mb-3">
					<img src="<?= base_url('assets/images/unnamed.jpg') ?>" class="rounded-circle" alt="dirham" width="250px">
				</div>
				<div class="mb-3">
					<p>Hallo, saya Dirham Triyadi, saya seorang mahasiswa di Universitas Informatika dan Bisnis Indonesia</p>
				</div>
				<div class="mb-3">
					<h1>Skills</h1>
					<i class="fab fa-html5 fa-3x m-1" style="color: #d35836;"></i>
					<i class="fab fa-css3-alt fa-3x m-1" style="color: #304cdc;"></i>
					<i class="fab fa-js fa-3x m-1" style="color: #f2bf26;"></i>
					<i class="fab fa-php fa-3x m-1" style="color: black; background-color: #767bb3"></i>
				</div>
				<div class="mb-3">
					<h1>Contact</h1>
					<a href="https://github.com/dirhamtriyadi"><i class="fab fa-github fa-3x m-1"></i></a>
					<a href="https://www.instagram.com/triyadidirham"><i class="fab fa-instagram fa-3x m-1"></i></a>
					<a href="https://www.facebook.com/dirham.triyadi"><i class="fab fa-facebook fa-3x m-1"></i></a>
					<a href="https://www.linkedin.com/in/dirham-triyadi-58a608201"><i class="fab fa-linkedin fa-3x m-1"></i></a>
				</div>
			</div>
		</div>
	  </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/_partials/footer.php') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>
</html>
