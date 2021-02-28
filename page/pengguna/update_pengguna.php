<?php


		$kode = $_GET['id'];

		$sql = $koneksi->query ("select * from tb_pengguna where id_pengguna='$kode'");

		$data = $sql->fetch_assoc();

 ?>


 <div class="row">
 		<!-- left column -->
 		<div class="col-md-6">
 			<!-- general form elements -->
 			<div class="box box-primary">
 				<div class="box-header with-border">
 					<h3 class="box-title">Update Data Pengguna</h3>
 				</div>
 				<!-- /.box-header -->
 				<!-- form start -->
 				<form method="POST">
 					<div class="box-body">
           <div class="form-group">
                  <label for="exampleInputEmail1">ID Pengguna</label>
                  <input type="text" class="form-control" value = "<?php echo $data["id_pengguna"]?>" readonly name = "id_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value = "<?php echo $data["nama_pengguna"]?>" name = "nama_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" value = "<?php echo $data["tgl_lahir"]?>" name = "tgl_lahir">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" value = "<?php echo $data["alamat_pengguna"]?>" name="alamat_pengguna"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" value = "<?php echo $data["no_telp"]?>" name = "no_telp">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" class="form-control" value = "<?php echo $data["jenis_kelamin"]?>" name = "jenis_kelamin">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="text" class="form-control" value = "<?php echo $data["NIK"]?>" name = "NIK">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="text" class="form-control" value = "<?php echo $data["e_mail"]?>" name = "e_mail">
                </div>



 			  <div class="box-footer">
 			 	<button type="submit" name ="simpan" class="btn btn-primary">Ubah</button>
 			  </div>
 			</form>
 		  </div>



 		  <?php



 				if (isset($_POST['simpan'])) {

          $nama_pengguna = $_POST['nama_pengguna'];
          $tgl_lahir = $_POST['tgl_lahir'];
          $alamat_pengguna = $_POST['alamat_pengguna'];
          $no_telp = $_POST['no_telp'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $NIK = $_POST['NIK'];
          $e_mail = $_POST['e_mail'];

 				$sql2 = $koneksi->query("update tb_pengguna set nama_pengguna='$nama_pengguna', tgl_lahir='$tgl_lahir', alamat_pengguna='$alamat_pengguna', no_telp='$no_telp', jenis_kelamin='$jenis_kelamin', NIK='$NIK', e_mail='$e_mail' where id_pengguna='$kode' ");

 				if ($sql2) {
 					?>

 						<script type="text/javascript">
 							alert ("Data Berhasil Diubah");
 							window.location.href="?page=pengguna";
 						</script>


 					<?php
 				}


 			}


 		?>