<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Rental Mobil</title>
  </head>
  <body>
	  <div class="container">
		  <div class="row">
			  <div class="col-md">
              <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <li class="nav-item <?= $data == 'Rental Mobil' ? 'active' : '' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Rental Mobil</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
    </div>
    <li class="nav-item <?= $data == 'Dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('Dashboard') ?>">
            <i class="fas fa-fw fa-columns"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'merk' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('merk') ?>">
            <i class="fas fa-fw fa-columns"></i>
            <span>Data Merk</span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'mobil' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('mobil') ?>">
            <i class="fas fa-fw fa-car-alt"></i>
            <span>Data Mobil</span>
        </a>
    </li>
    
    
    <div class="sidebar-heading">
    </div>

    <li class="nav-item <?= $data == 'pemesan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('pemesan') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pemesan</span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'jenis_bayar' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('jenis_bayar') ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Data Jenis Bayar</span>
        </a>
    </li>
    
    
    <div class="sidebar-heading">
    </div>

    <li class="nav-item <?= $data == 'perjalanan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('perjalanan') ?>">
            <i class="fas fa-fw fa-street-view"></i>
            <span>Data Perjalanan</span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'pesanan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('pesanan') ?>">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Data Pesanan</span>
        </a>
    </li>

    <div class="sidebar-heading">
    </div>

    <li class="nav-item <?= $data == 'akun' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= ('akun') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manajemen Akun</span>
        </a>
    </li>

    <!-- Divider -->

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
</ul>
			  </div>
		  </div>
	  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
  <footer class="sticky-footer bg-white">
	<div class="container my-auto">
	    <div class="copyright text-center my-auto">
	    <span>
	    <p>Copyright 2021 MI 20B<a href="#"> Kelompok 06</a>. All Right Reserved</p>
	    </div>
	</div>
  </footer>
</html>
