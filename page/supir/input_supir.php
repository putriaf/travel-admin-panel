<?php

    $sql = $koneksi->query("select id_supir from tb_supir order by id_supir desc");

    $data = $sql->fetch_assoc();

    $id_supir = $data['id_supir'];

    $urut = substr($id_supir, 4, 4);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "S000".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "S00".$tambah;
    }

    else if (strlen($tambah)==3){
      $format = "S0".$tambah;
    }

    else {
      $format = "S".$tambah;
    }


?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Supir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Supir</label>
                  <input type="text" class="form-control" placeholder="Masukkan ID supir" value = "<?php echo $format?>" name = "id_supir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" placeholder="Masukkan nama supir" name = "nama_supir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Masukkan tanggal lahir" name = "tgl_lahir">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Masukkan alamat" name="alamat_supir"></textarea>
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

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $id_supir = $_POST['id_supir'];
              $nama_supir = $_POST['nama_supir'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $alamat_supir = $_POST['alamat_supir'];
              $no_telp = $_POST['no_telp'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $NIK = $_POST['NIK'];

              $sql = $koneksi->query("insert into tb_supir (id_supir, nama_supir, tgl_lahir, alamat_supir, no_telp, jenis_kelamin, NIK) values ('$id_supir', '$nama_supir', '$tgl_lahir', '$alamat_supir', '$no_telp', '$jenis_kelamin', '$NIK')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=supir";
                  </script>

                  <?php
              }

            }
            ?>

