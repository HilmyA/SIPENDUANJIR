<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
?>

<!-- HTML -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplikasi Kependudukan (SIDAK)</title>
	<link rel="icon" href="dist/img/profile.png">

	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-red navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>APLIKASI KEPENDUDUKAN DESA ANJIR MAMBULAU TIMUR</b>
						</font>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> KANTOR DESA</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/profile.png">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- BAGIAN KIRI DARI APLIKASI -->
						<!-- Level  -->
						<!-- LOGIN UNTUK BAGIAN ADMINISTRATOR -->
						<?php
						if ($data_level == "Administrator") {
						?>
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>HALAMAN AWAL</p>
								</a>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>KELOLA WARGA<i class="fas fa-angle-left right"></i></p>
								</a>
								<!-- ANAKNYA DARI KELOLA PENDUDUK -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-pend" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Warga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-kartu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kepala Keluarga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-rt" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Rukun Tetangga</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-cogs"></i>
									<p>PERPUTARAN WARGA<i class="fas fa-angle-left right"></i></p>
								</a>
								<!-- ANAKNYA DARI PERPUTARAN PENDUDUK -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Baru Lahir</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-mendu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Pendatang</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Pindah</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>LAPORAN<i class="fas fa-angle-left right"></i> </p>
								</a>
								<!-- ANAKNYA DARI LAPORAN -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=warga" class="nav-link">
											<i class="nav-icon far fa-circle text-warning">
											</i>
											<p>Laporan Warga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=kk" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Kepala Keluarga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=rt" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Rukun Tetangga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Kelahiran</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=meninggal" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=pendatang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Pendatang</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Pindah</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-header">PENGATURAN</li>


							<li class="nav-item">
								<a href="?page=data-pengguna" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>PENGGUNA </p>
								</a>
							</li>

							<!-- LOGIN UNTUK YANG BUKAN ADMINISTRATOR (KAUR) -->
							<!-- BEDANYA DIBAGIAN KAUR TIDAK DAPAT MELIHAT PENGGUNA LAIN BAIK NAMA MAUPUN JABATAN  -->
						<?php
						} elseif ($data_level == "Kaur Pemerintah") {
						?>

							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>HALAMAN AWAL</p>
								</a>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>KELOLA WARGA<i class="fas fa-angle-left right"></i></p>
								</a>
								<!-- ANAKNYA DARI KELOLA PENDUDUK -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-pend" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Warga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-kartu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Kepala Keluarga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-rt" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Data Rukun Tetangga</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-cogs"></i>
									<p>PERPUTARAN WARGA<i class="fas fa-angle-left right"></i></p>
								</a>
								<!-- ANAKNYA DARI PERPUTARAN PENDUDUK -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Baru Lahir</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-mendu" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-datang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Pendatang</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=data-pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Warga Pindah</p>
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-print"></i>
									<p>LAPORAN<i class="fas fa-angle-left right"></i> </p>
								</a>
								<!-- ANAKNYA DARI LAPORAN -->
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=warga" class="nav-link">
											<i class="nav-icon far fa-circle text-warning">
											</i>
											<p>Laporan Warga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=kk" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Kepala Keluarga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=rt" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Rukun Tetangga</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=lahir" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Kelahiran</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=meninggal" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Meninggal</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=pendatang" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Pendatang</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="?page=pindah" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Laporan Pindah</p>
										</a>
									</li>
								</ul>
							</li>

						<?php
						}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah yakin ingin keluar?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>LOGOUT</p>
							</a>
						</li>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>
			<!-- Main content -->
			<section class="content">
				<!-- ROUTENYA COY PANJANG BET-->
				<div class="container-fluid">
					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];
						switch ($hal) {
								//PENGGUNA
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

								//KK
							case 'data-kartu':
								include "admin/kartu/data_kartu.php";
								break;
							case 'add-kartu':
								include "admin/kartu/add_kartu.php";
								break;
							case 'edit-kartu':
								include "admin/kartu/edit_kartu.php";
								break;
							case 'anggota':
								include "admin/kartu/anggota.php";
								break;
							case 'del-anggota':
								include "admin/kartu/del_anggota.php";
								break;
							case 'del-kartu':
								include "admin/kartu/del_kartu.php";
								break;

								//RT
							case 'data-rt':
								include "admin/rt/data_rt.php";
								break;
							case 'add-rt':
								include "admin/rt/add_rt.php";
								break;
							case 'edit-rt':
								include "admin/rt/edit_rt.php";
								break;
							case 'del-rt':
								include "admin/rt/del_rt.php";
								break;
							case 'wargart':
								include "admin/rt/wargart.php";
								break;
							case 'del-wargart':
								include "admin/rt/del_wargart.php";
								break;

								//PENDUDUK
							case 'data-pend':
								include "admin/pend/data_pend.php";
								break;
							case 'add-pend':
								include "admin/pend/add_pend.php";
								break;
							case 'edit-pend':
								include "admin/pend/edit_pend.php";
								break;
							case 'del-pend':
								include "admin/pend/del_pend.php";
								break;
							case 'view-pend':
								include "admin/pend/view_pend.php";
								break;

								//FILTER WARGA
							case 'filter-lk':
								include "admin/pend/filter_laki.php";
								break;
							case 'filter-pr':
								include "admin/pend/filter_pr.php";
								break;

								//KELAHIRAN
							case 'data-lahir':
								include "admin/lahir/data_lahir.php";
								break;
							case 'add-lahir':
								include "admin/lahir/add_lahir.php";
								break;
							case 'edit-lahir':
								include "admin/lahir/edit_lahir.php";
								break;
							case 'del-lahir':
								include "admin/lahir/del_lahir.php";
								break;

								//MENINGGAL
							case 'data-mendu':
								include "admin/mendu/data_mendu.php";
								break;
							case 'add-mendu':
								include "admin/mendu/add_mendu.php";
								break;
							case 'edit-mendu':
								include "admin/mendu/edit_mendu.php";
								break;
							case 'del-mendu':
								include "admin/mendu/del_mendu.php";
								break;

								//PINDAH
							case 'data-pindah':
								include "admin/pindah/data_pindah.php";
								break;
							case 'add-pindah':
								include "admin/pindah/add_pindah.php";
								break;
							case 'edit-pindah':
								include "admin/pindah/edit_pindah.php";
								break;
							case 'del-pindah':
								include "admin/pindah/del_pindah.php";
								break;

								//PENDATANG
							case 'data-datang':
								include "admin/datang/data_datang.php";
								break;
							case 'add-datang':
								include "admin/datang/add_datang.php";
								break;
							case 'edit-datang':
								include "admin/datang/edit_datang.php";
								break;
							case 'del-datang':
								include "admin/datang/del_datang.php";
								break;

								//LAPORAN
							case 'kk':
								include "report/kepalakeluarga/lap_kepalakeluarga.php";
								break;
							case 'lahir':
								include "report/kelahiran/lap_kelahiran.php";
								break;
							case 'meninggal':
								include "report/meninggal/lap_meninggal.php";
								break;
							case 'pendatang':
								include "report/pendatang/lap_pendatang.php";
								break;
							case 'warga':
								include "report/warga/lap_warga.php";
								break;
							case 'pindah':
								include "report/pindah/lap_pindah.php";
								break;
							case 'rt':
								include "report/rukuntetangga/lap_rt.php";
								break;

								//PROSESCETAK
							case 'cetak-kk':
								include "report/kartukeluarga/cetakkk.php";
								break;

								//default
							default:
								echo "<center><h1> ERROR!</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Administrator") {
							include "home/admin.php";
						} elseif ($data_level == "Kaur Pemerintah") {
							include "home/kaur.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href=https://www.youtube.com/@Hilmy007">
					<strong>Hilmy Al Shidiq - 19630639</strong>
				</a>
				UNISKA MAB.
			</div>
			<b>DESA ANJIR 2022</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()
			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>