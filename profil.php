<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta charset="utf-8" name="author" content="Moch Sean Adam Zulkarnain">
	<title>Pelatihan Bpptik Junior Web Dev Gel 8 </title>

<!-- Boostrap FontAwesome CSS-->
<link href="./css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="./css/all.min.css"  />
<link rel="stylesheet" href="css/cssku.css">

</head>

<body>
	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">
			  <img src="img/logo.png" width="100" height="30">
		  </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="index">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Profil
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="profil">Profil Singkat</a></li>
					<li><a class="dropdown-item" href="profil#visimisi">Visi dan Misi</a></li>
					<li><a class="dropdown-item" href="profil#struktur">Struktur Organisasi</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="pelatihan">Pelatihan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="sertifikasi">Sertifikasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="jadwal">Jadwal</a>
				</li>
				<li class="nav-item">
					<button class="btn btn-outline-info" type="submit">Registrasi Sekarang</button>
				</li>
			  </li>
			</ul>
			<form class="d-flex">
			  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#kontak">Contact Us</button>
			</form>
		  </div>
		</div>
	</nav>
    <br>
	<!-- Content -->
	<div class="container-fluid">
        <!-- Sidebar -->
		<div class="row">
            <div class="col-2">
                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">Profil</strong>
                    <ul>
                        <li><a href="#profilsingkat">Profil Singkat</a></li>
                        <li><a href="#visimisi">Visi dan Misi</a></li>
                        <li><a href="#struktur">Struktur Organisasi</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-9">
                <div class="card">
                    <div class="card-header" id="profilsingkat">Profil Singkat</div>
                    <div class="card-body">
                        <p class="text-center"> <img src="img/profilsingkat.webp" > </p>
                        <p>Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK) yang dahulu bernama Korea ??? Indonesia (Korina) ICT Training Center adalah sebuah Unit Pelaksana Teknis (UPT) di lingkungan Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) Kementerian Komunikasi dan Informatika (Kominfo). </p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" id="visimisi">Visi Dan Misi LSP BPPTPIK</div>
                    <div class="card-body">
                        <strong>A. Visi</strong>
                        <p>Menjadi Lembaga Sertifikasi Profesi bidang Teknologi Informasi dan Komunikasi (TIK) terbaik di tingkat nasional, regional, dan internasional.</p>
                        <strong>B. Misi</strong>
                        <ol>
                            <li>Melaksanakan sertifikasi kompetensi kerja di bidang TIK yang independen dan profesional</li>
                            <li>Menjamin mutu pelaksanaan sertifikasi kompetensi kerja sesuai dengan standar yang berlaku.</li>
                        </ol>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header" id="struktur">Struktur Organisasi</div>
                    <div class="card-body">
                        Berdasarkan Peraturan Menteri Komunikasi dan Informatika Nomor 4 Tahun 2018 Tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK).
                        <p></p>>
                        <p class="text-center"><img src="img/struktur.png" class="img-fluid"></p>
                    </div>
                </div>
            </div>
        </div>
	</div>

	<!-- Modal Kontak Us -->
	<div class="modal fade" id="kontak" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="Modal Contatc Us" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 id="kontaklabel"><i class="fas fa-feather-alt"> Contact Us </i></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<form class="" type="">
					<strong>Nama Anda:</strong>
					<input type="text" class="form-control" name="username" placeholder="Silakan Input nama Anda..."  required>
					<p></p>
					<strong>Email Anda:</strong>
					<input type="email" class="form-control" name="username" placeholder="Silakan Input Email Anda..."  required>
					<p></p>
					<strong>Keterangan:</strong><br>
					<font size="1%">(Jumlah Karakter Maksimal: 200)</font>
					<textarea name="keterangan" class="form-control" rows="5" required placeholder="Silakan isi keterangan disini..."></textarea><br>					<div class="row text-right" style="margin-top:1%;">
						<div class="col-sm-12 controls">
						  <button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> | Kirim</button>
						  <button type="reset" name="Clear" class="btn btn-warning"><i class="fa fa-eraser"></i> | Hapus</button>
						</div>
					</div>
				</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<!-- Footer -->
	<div class="container-fluid" style="background-color: #f8f9fa;">
		<footer class="py-2">
			<div class="row justify-content-center">
				<div class="col-2">
				<h5 ><i class="fa fa-user-friends"></i>  Mitra BPPTIK</h5>
				<hr>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">BNSP</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">KOMINFO</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kemnaker</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">LSP Digital</a></li>
				</ul>
				</div>
		
				<div class="col-2">
				<h5 ><i class="fa fa-link"></i> Link Popular</h5>
				<hr>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Training Online</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pelatihan Asesor</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Registrasi Sertifikasi</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tempat Uji Kompetensi</a></li>
				</ul>
				</div>
		
				<div class="col-2">
				<h5><i class="far fa-address-book"></i> Kontak</h5>
				<hr> 
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><div class="nav-link p-0 text-muted"><i class="fab fa-whatsapp"></i> Whatsapp : 082234604420</div></li>
					<li class="nav-item mb-2"><div class="nav-link p-0 text-muted"><i class="far fa-envelope"></i> Email : aincuy6@gmail.com </div></li>
				</ul>
				</div>
			</div>
			<div class="d-flex justify-content-between py-3 my-0 border-top">
				<p>?? 2021 BPPTIK. Moch Sean Adam Zulkarnain.</p>
			</div>
		</footer>
	</div>


</body>
<!-- JavaScript Boostrap -->
<script src="js/bootstrap.bundle.min.js"></script>
</html>