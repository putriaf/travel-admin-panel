<?php

    $kode = $_GET['id'];

    $sql = $koneksi->query("select * from tb_jadwal where id_jadwal='$kode'");

    $data = $sql->fetch_assoc();
    
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Jadwal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Jadwal</label>
                  <input type="text" class="form-control" value = "<?php echo $data["id_jadwal"]?>" readonly name = "id_jadwal">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Kendaraan</label>
                  <input type="text" class="form-control" value = "<?php echo $data["kd_kendaraan"]?>" name = "kd_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Pool Asal</label>
                  <input type="text" class="form-control" value = "<?php echo $data["pool_berangkat"]?>" name = "pool_berangkat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Pool Tujuan</label>
                  <input type="text" class="form-control" value = "<?php echo $data["pool_tujuan"]?>" name = "pool_tujuan">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Waktu Berangkat</label>
                  <input type="text" class="form-control" value = "<?php echo $data["waktu_berangkat"]?>" name = "waktu_berangkat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input type="text" class="form-control" value = "<?php echo $data["harga"]?>" name = "harga">
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
              $pool_berangkat = $_POST['pool_berangkat'];
              $pool_tujuan = $_POST['pool_tujuan'];
              $waktu_berangkat = $_POST['waktu_berangkat'];
              $harga = $_POST['harga'];

              $sql2 = $koneksi->query("update tb_jadwal set kd_kendaraan='$kd_kendaraan', pool_berangkat='$pool_berangkat', pool_tujuan='$pool_tujuan', waktu_berangkat='$waktu_berangkat', harga='$harga' where id_jadwal='$kode'");

              if ($sql2){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=jadwal";
                  </script>

                  <?php
              }

            }
            ?>

