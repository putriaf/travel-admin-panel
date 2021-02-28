          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pool</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href = "?page=pool&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;" title="">Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Kode Pool</th>
                  <th style="text-align:center">Kota</th>
                  <th style="text-align:center">Alamat</th>
                  <th style="text-align:center">No Telpon</th>
                  <th style="text-align:center">Aksi</th>
                  
                </tr>
                </thead>
                <tbody>

                	<?php

                		$no =1;
                		$sql = $koneksi->query("select * from tb_pool");

                		while ($data = $sql->fetch_assoc()){

                		
                	?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['kd_pool']; ?></td>
                  <td><?php echo $data['kota']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['no_telp']; ?></td>
                  <td>
                      <a href="?page=pool&aksi=ubah&id=<?php echo $data['kd_pool'];?>" class="btn btn-success" style="margin-right: 5px;" title=""><i class="fa fa-edit"></i> Ubah</a>
                      <a onclick="return confirm ('Apa Anda Yakin Menghapus Data Ini?')" href="?page=pool&aksi=hapus&id=<?php echo $data['kd_pool'];?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>
                  </td>

                  
                </tr>
                
                <?php }


                ?>
            </tbody>

        </table>
    </div>
</div>