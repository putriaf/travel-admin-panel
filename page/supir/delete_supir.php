<?php

    $kode = $_GET['id'];
    $sql = $koneksi->query("delete from tb_supir where id_supir='$kode'");

    if($sql){
        ?>

              <script type="text/javascript">
                alert ("Data Berhasil Dihapus");
                window.location.href="?page=supir";
              </script>

        <?php
    }


?>