<?php

    $kode = $_GET['id'];

    $sql = $koneksi->query("select * from tb_pool where kd_pool ='$kode'");

    $data = $sql->fetch_assoc();

?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Pool</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pool</label>
                  <input type="text" class="form-control" value = "<?php echo $data['kd_pool'] ?>" readonly name = "kd_pool">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kota</label>
                  <input type="text" class="form-control" value = "<?php echo $data['kota'] ?>" name = "kota">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" value = "<?php echo $data['alamat'] ?>" name="alamat"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" value = "<?php echo $data['no_telp'] ?>" name = "no_telp">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $kota = $_POST['kota'];
              $alamat = $_POST['alamat'];
              $no_telp = $_POST['no_telp'];

              $sql2 = $koneksi->query("update tb_pool set kota='$kota', alamat='$alamat', no_telp='$no_telp' where kd_pool='$kode'");

              if ($sql2){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=pool";
                  </script>

                  <?php
              }

            }
            ?>

