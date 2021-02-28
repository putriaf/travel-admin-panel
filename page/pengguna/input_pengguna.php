<?php

    $sql = $koneksi->query("select id_pengguna from tb_pengguna order by id_pengguna desc");

    $data = $sql->fetch_assoc();

    $id_pengguna = $data['id_pengguna'];

    $urut = substr($id_pengguna, 4, 4);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "A000".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "A00".$tambah;
    }

    else if (strlen($tambah)==3){
      $format = "A0".$tambah;
    }

    else {
      $format = "A".$tambah;
    }


?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Pengguna</label>
                  <input type="text" class="form-control" placeholder="Masukkan ID Pengguna" value = "<?php echo $format?>" name = "id_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" placeholder="Masukkan nama" name = "nama_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Masukkan tanggal lahir" name = "tgl_lahir">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Masukkan alamat" name="alamat_pengguna"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" placeholder="Masukkan nomor telepon" name = "no_telp">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="Masukkan jenis kelamin (L/P)" name = "jenis_kelamin">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="text" class="form-control" placeholder="Masukkan NIK" name = "NIK">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="text" class="form-control" placeholder="Masukkan e-mail aktif" name = "e_mail">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $id_pengguna = $_POST['id_pengguna'];
              $nama_pengguna = $_POST['nama_pengguna'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $alamat_pengguna = $_POST['alamat_pengguna'];
              $no_telp = $_POST['no_telp'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $NIK = $_POST['NIK'];
              $e_mail = $_POST['e_mail'];

              $sql = $koneksi->query("insert into tb_pengguna (id_pengguna, nama_pengguna, tgl_lahir, alamat_pengguna, no_telp, jenis_kelamin, NIK, e_mail) values ('$id_pengguna', '$nama_pengguna', '$tgl_lahir', '$alamat_pengguna', '$no_telp', '$jenis_kelamin', '$NIK', '$e_mail')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pengguna";
                  </script>

                  <?php
              }

            }
            ?>

