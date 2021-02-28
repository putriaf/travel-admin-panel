<?php

    $sql = $koneksi->query("select kd_kendaraan from tb_kendaraan order by kd_kendaraan desc");

    $data = $sql->fetch_assoc();

    $kd_kendaraan = $data['kd_kendaraan'];

    $urut = substr($kd_kendaraan, 4, 4);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "K000".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "K00".$tambah;
    }

    else if (strlen($tambah)==3){
      $format = "K0".$tambah;
    }

    else {
      $format = "K".$tambah;
    }


?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Kendaraan</label>
                  <input type="text" class="form-control" placeholder="Masukkan kode kendaraan" value = "<?php echo $format?>" name = "kd_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Id Supir</label>
                  <input type="text" class="form-control" placeholder="Masukkan id supir" name = "id_supir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Plat</label>
                  <input type="text" class="form-control" placeholder="Masukkan nomor plat kendaraan" name = "no_plat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Merk Kendaraan</label>
                  <input type="text" class="form-control" placeholder="Nama merek kendaraan" name = "merk_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Seat</label>
                  <input type="text" class="form-control" placeholder="Jumlah seat maksimum" name = "jumlah_seat">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $kd_kendaraan = $_POST['kd_kendaraan'];
              $id_supir = $_POST['id_supir'];
              $no_plat = $_POST['no_plat'];
              $merk_kendaraan = $_POST['merk_kendaraan'];
              $jumlah_seat = $_POST['jumlah_seat'];

              $sql = $koneksi->query("insert into tb_kendaraan (kd_kendaraan, id_supir, no_plat, merk_kendaraan, jumlah_seat) values ('$kd_kendaraan', '$id_supir', '$no_plat', '$merk_kendaraan', '$jumlah_seat')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=kendaraan";
                  </script>

                  <?php
              }

            }
            ?>


