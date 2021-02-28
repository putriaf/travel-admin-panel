<?php
    $kode = $_GET['id'];
    $sql = $koneksi->query(" delete from tb_kendaraan where kd_kendaraan='$kode'");
    if($sql){
        ?>

              <script type="text/javascript">
                alert ("Data Berhasil Dihapus");
                window.location.href="?page=kendaraan";
              </script>

        <?php
    }


?>