<?php

    $sql = $koneksi->query("select kd_pool from tb_pool order by kd_pool desc");

    $data = $sql->fetch_assoc();

    $kd_pool = $data['kd_pool'];

    $urut = substr($kd_pool, 2, 2);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "P0".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "P".$tambah;
    }
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pool</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pool</label>
                  <input type="text" class="form-control" placeholder="Masukkan id pool" value = "<?php echo $format?>" name = "kd_pool">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kota</label>
                  <input type="text" class="form-control" placeholder="Masukkan nama kota" name = "kota">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Masukkan alamat pool" name="alamat"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" placeholder="Masukkan nomor telepon pool" name = "no_telp">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $kd_pool = $_POST['kd_pool'];
              $kota = $_POST['kota'];
              $alamat = $_POST['alamat'];
              $no_telp = $_POST['no_telp'];

              $sql = $koneksi->query("insert into tb_pool (kd_pool, kota, alamat, no_telp) values ('$kd_pool', '$kota', '$alamat', '$no_telp')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pool";
                  </script>

                  <?php
              }

            }
            ?>

