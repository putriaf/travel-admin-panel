<?php

    $sql = $koneksi->query("select id_jadwal from tb_jadwal order by id_jadwal desc");

    $data = $sql->fetch_assoc();

    $id_jadwal = $data['id_jadwal'];

    $urut = substr($id_jadwal, 3, 3);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "BDG-JKT-00".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "BDG-JKT-0".$tambah;
    }

    else if (strlen($tambah)==3){
      $format = "BDG-JKT-".$tambah;
    }
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Jadwal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Jadwal</label>
                  <input type="text" class="form-control" placeholder="Masukkan id jadwal" value = "<?php echo $format?>" name = "id_jadwal">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Kendaraan</label>
                  <input type="text" class="form-control" placeholder="Masukkan kode kendaraan" name = "kd_kendaraan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Pool Asal</label>
                  <input type="text" class="form-control" placeholder="Masukkan kode pool" name = "pool_berangkat">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Pool Tujuan</label>
                  <input type="text" class="form-control" placeholder="Masukkan kode pool" name = "pool_tujuan">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Waktu Berangkat</label>
                  <input type="text" class="form-control" placeholder="Masukkan jam keberangkatan" name = "waktu_berangkat">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input type="text" class="form-control" placeholder="Masukkan harga tiket" name = "harga">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $id_jadwal = $_POST['id_jadwal'];
              $kd_kendaraan = $_POST['kd_kendaraan'];
              $pool_berangkat = $_POST['pool_berangkat'];
              $pool_tujuan = $_POST['pool_tujuan'];
              $waktu_berangkat = $_POST['waktu_berangkat'];
              $harga = $_POST['harga'];

              $sql = $koneksi->query("insert into tb_jadwal (id_jadwal, kd_kendaraan, pool_berangkat, pool_tujuan, waktu_berangkat, harga) values ('$id_jadwal', '$kd_kendaraan', '$pool_berangkat', '$pool_tujuan', '$waktu_berangkat', '$harga')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=jadwal";
                  </script>

                  <?php
              }

            }
            ?>

