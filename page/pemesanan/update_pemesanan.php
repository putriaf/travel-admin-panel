<?php

    $kode = $_GET['id'];
    $sql = $koneksi->query("select * from tb_pemesanan where kd_pemesanan = '$kode'");
    $data = $sql->fetch_assoc();

   
?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pemesanan</label>
                  <input type="text" class="form-control" value = "<?php echo $data['kd_pemesanan'] ?>" readonly name = "kd_pemesanan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Id Pengguna</label>
                  <input type="text" class="form-control" value = "<?php echo $data['id_pengguna'] ?>" name = "id_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Id Jadwal</label>
                  <input type="text" class="form-control" value = "<?php echo $data['id_jadwal'] ?>" name = "id_jadwal">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Tiket</label>
                  <input type="number" class="form-control" value = "<?php echo $data['jml_tiket'] ?>" name = "jml_tiket">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pemesanan</label>
                  <input type="date" class="form-control" value = "<?php echo $data['tgl_pesan'] ?>" name = "tgl_pesan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pembayaran</label>
                  <input type="date" class="form-control" value = "<?php echo $data['tgl_bayar'] ?>" name = "tgl_bayar">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Total Pembayaran</label>
                  <input type="text" class="form-control" value = "<?php echo $data['total_bayar'] ?>" name = "total_bayar">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Status Pemesanan</label>
                  <input type="text" class="form-control" value = "<?php echo $data['status_pesan'] ?>" name = "status_pesan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $id_pengguna = $_POST['id_pengguna'];
              $id_jadwal = $_POST['id_jadwal'];
              $jml_tiket = $_POST['jml_tiket'];
              $tgl_pesan = $_POST['tgl_pesan'];
              $tgl_bayar = $_POST['tgl_bayar'];
              $total_bayar = $_POST['total_bayar'];
              $status_pesan = $_POST['status_pesan'];

              $sql2 = $koneksi->query("update tb_pemesanan set id_pengguna='$id_pengguna', id_jadwal='$id_jadwal', jml_tiket='$jml_tiket', 
                tgl_pesan='$tgl_pesan', tgl_bayar='$tgl_bayar', total_bayar='$total_bayar', status_pesan='$status_pesan' where kd_pemesanan = '$kode'");

              if ($sql2){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=pemesanan";
                  </script>

                  <?php
              }

            }
            ?>

