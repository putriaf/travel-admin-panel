<?php
    $kode = $_GET['id'];

    $sql = $koneksi->query("select * from tb_supir where id_supir='$kode'");

    $data = $sql->fetch_assoc();

?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Data Supir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Supir</label>
                  <input type="text" class="form-control" value = "<?php echo $data["id_supir"]?>" readonly name = "id_supir">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value = "<?php echo $data["nama_supir"]?>" name = "nama_supir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" class="form-control" value = "<?php echo $data["tgl_lahir"]?>" name = "tgl_lahir">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows = "3" value = "<?php echo $data["alamat_supir"]?>" name="alamat_supir"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" value = "<?php echo $data["no_telp"]?>" name = "no_telp">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input type="text" class="form-control" value = "<?php echo $data["jenis_kelamin"]?>" name = "jenis_kelamin">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="text" class="form-control" value = "<?php echo $data["NIK"]?>" name = "NIK">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


          <?php

            if (isset($_POST['simpan'])){

              $nama_supir = $_POST['nama_supir'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $alamat_supir = $_POST['alamat_supir'];
              $no_telp = $_POST['no_telp'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $NIK = $_POST['NIK'];

              $sql2 = $koneksi->query("update tb_supir set nama_supir='$nama_supir', tgl_lahir='$tgl_lahir', alamat_supir='$alamat_supir', no_telp='$no_telp', jenis_kelamin='$jenis_kelamin',NIK='$NIK' where id_supir='$kode'");

              if ($sql2){
                ?>

                  <script type="text/javascript">
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=supir";
                  </script>

                  <?php
              }


            }
            ?>

