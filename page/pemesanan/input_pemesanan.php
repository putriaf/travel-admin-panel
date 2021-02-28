<?php

    $sql = $koneksi->query("select kd_pemesanan from tb_pemesanan order by kd_pemesanan desc");

    $data = $sql->fetch_assoc();

    $kd_pemesanan = $data['kd_pemesanan'];

    $urut = substr($kd_pemesanan, 6, 6);

    $tambah = (int) $urut+1;

    if (strlen($tambah)==1){
      $format = "KJT500000".$tambah;
    }

    else if (strlen($tambah)==2){
      $format = "KJT50000".$tambah;
    }

    else if (strlen($tambah)==3){
      $format = "KJT5000".$tambah;
    }

    else if (strlen($tambah)==4){
        $format = "KJT500".$tambah;
    }

    else if (strlen($tambah)==5){
        $format = "KJT50".$tambah;
    }

    else{
        $format = "KJT5".$tambah;
      }
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
                  <input type="text" class="form-control" placeholder="Masukkan kode pemesanan" value = "<?php echo $format?>" name = "kd_pemesanan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">ID Pengguna</label>
                  <input type="text" class="form-control" placeholder="Masukkan id pengguna" name = "id_pengguna">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">ID Jadwal</label>
                  <input type="text" class="form-control" placeholder="Masukkan id jadwal yang dipilih" name = "id_jadwal">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Tiket</label>
                  <input type="number" class="form-control" placeholder="Masukkan jumlah tiket yang dipesan" name = "jml_tiket">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pemesanan</label>
                  <input type="date" class="form-control" placeholder="Masukkan tanggal pemesanan" name = "tgl_pesan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pembayaran</label>
                  <input type="date" class="form-control" placeholder="Masukkan tanggal pembayaran" name = "tgl_bayar">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Total Pembayaran</label>
                  <input type="text" class="form-control" placeholder="Masukkan total yang harus dibayarkan" name = "total_bayar">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Status Pemesanan</label>
                  <input type="text" class="form-control" placeholder="Status pemesanan" name = "status_pesan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $kd_pemesanan = $_POST['kd_pemesanan'];
              $id_pengguna = $_POST['id_pengguna'];
              $id_jadwal = $_POST['id_jadwal'];
              $jml_tiket = $_POST['jml_tiket'];
              $tgl_pesan = $_POST['tgl_pesan'];
              $tgl_bayar = $_POST['tgl_bayar'];
              $total_bayar = $_POST['total_bayar'];
              $status_pesan = $_POST['status_pesan'];

              $sql = $koneksi->query("insert into tb_pemesanan (kd_pemesanan, id_pengguna, id_jadwal, jml_tiket, tgl_pesan, tgl_bayar, total_bayar, status_pesan) values ('$kd_pemesanan', '$id_pengguna', '$id_jadwal', '$jml_tiket', '$tgl_pesan', '$tgl_bayar', '$total_bayar', '$status_pesan')");

              if ($sql){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pemesanan";
                  </script>

                  <?php
              }

            }
            ?>

