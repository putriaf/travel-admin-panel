<?php

	$page = $_GET['page'];
	$aksi = $_GET['aksi'];

	if ($page == "pengguna"){
		if($aksi == "") {
			include "page/pengguna/pengguna.php";
		}
		else if($aksi == "tambah"){
			include "page/pengguna/input_pengguna.php";
		}
		else if($aksi == "ubah"){
			include "page/pengguna/update_pengguna.php";
		}
		else if($aksi == "hapus"){
			include "page/pengguna/delete_pengguna.php";
		}
	}

	else if ($page == ""){
		include "home.php";
	}

	else if ($page == "supir"){
		if ($aksi == ""){
			include "page/supir/supir.php";
		}
		else if($aksi == "tambah"){
			include "page/supir/input_supir.php";
		}
		else if($aksi == "ubah"){
			include "page/supir/update_supir.php";
		}
		else if($aksi == "hapus"){
			include "page/supir/delete_supir.php";
		}
	}

	else if ($page == "kendaraan"){
		if ($aksi == ""){
			include "page/kendaraan/kendaraan.php";
		}
		else if($aksi == "tambah"){
			include "page/kendaraan/input_kendaraan.php";
		}
		else if($aksi == "ubah"){
			include "page/kendaraan/update_kendaraan.php";
		}
		else if($aksi == "hapus"){
			include "page/kendaraan/delete_kendaraan.php";
		}
	}

	else if ($page ==  "pool"){
		if ($aksi == ""){
			include "page/pool/pool.php";
		}
		else if($aksi == "tambah"){
			include "page/pool/input_pool.php";
		}
		else if($aksi == "ubah"){
			include "page/pool/update_pool.php";
		}
		else if($aksi == "hapus"){
			include "page/pool/delete_pool.php";
		}
	}

	else if ($page == "jadwal"){
		if ($aksi == ""){
			include "page/jadwal/jadwal.php";
		}
		if ($aksi == "tambah"){
			include "page/jadwal/input_jadwal.php";
		}
		else if($aksi == "ubah"){
			include "page/jadwal/update_jadwal.php";
		}
		else if($aksi == "hapus"){
			include "page/jadwal/delete_jadwal.php";
		}
	}

	else if ($page == "pemesanan"){
		if ($aksi == ""){
			include "page/pemesanan/pemesanan.php";
		}

		else if($aksi == "tambah"){
			include "page/pemesanan/input_pemesanan.php";
		}

		else if($aksi == "ubah"){
			include "page/pemesanan/update_pemesanan.php";
		}

		else if($aksi == "hapus"){
			include "page/pemesanan/delete_pemesanan.php";
		}
	}
?>