<?php
    $kode = $_GET['id'];
    $sql = $koneksi->query("select * from tb_kendaraan where kd_kendaraan='$kode'");
    $data = $sql->fetch_assoc();

?>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Kendaraan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Kendaraan</label>
                  <input type="text" class="form-control" value = "<?php echo $data["kd_kendaraan"]?>" readonly name = "kd_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Id Supir</label>
                  <input type="text" class="form-control" value = "<?php echo $data["id_supir"]?>" name = "id_supir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Plat</label>
                  <input type="text" class="form-control" value = "<?php echo $data["no_plat"]?>" name = "no_plat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Merk Kendaraan</label>
                  <input type="text" class="form-control" value = "<?php echo $data["merk_kendaraan"]?>" name = "merk_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Seat</label>
                  <input type="text" class="form-control" value = "<?php echo $data["jumlah_seat"]?>" name = "jumlah_seat">
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
              $no_plat = $_POST['no_plat'];
              $merk_kendaraan = $_POST['merk_kendaraan'];
              $jumlah_seat = $_POST['jumlah_seat'];

              $sql2 = $koneksi->query(" update tb_kendaraan set id_supir='$id_supir', no_plat='$no_plat', merk_kendaraan='$merk_kendaraan', jumlah_seat='$jumlah_seat' where kd_kendaraan='$kode'");

              if ($sql2){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=kendaraan";
                  </script>

                  <?php
              }

            }
            ?>


