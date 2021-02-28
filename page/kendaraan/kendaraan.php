          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kendaraan </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href = "?page=kendaraan&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;" title="">Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Kode Kendaraan</th>
                  <th style="text-align:center"> Id Supir</th>
                  <th style="text-align:center">Nomor Plat</th>
                  <th style="text-align:center">Merk Kendaraan</th>
                  <th style="text-align:center">Jumlah Seat</th>
                  <th style="text-align:center">Aksi</th>
                </tr>
                </thead>
                <tbody>

                	<?php

                		$no =1;
                		$sql = $koneksi->query("select * from tb_kendaraan");

                		while ($data = $sql->fetch_assoc()){

                		
                	?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['kd_kendaraan']; ?></td>
                  <td><?php echo $data['id_supir']; ?></td>
                  <td><?php echo $data['no_plat']; ?></td>
                  <td><?php echo $data['merk_kendaraan']; ?></td>
                  <td><?php echo $data['jumlah_seat']; ?></td>
                  <td>
                      <a href = "?page=kendaraan&aksi=ubah&id=<?php echo $data['kd_kendaraan'];?>" class = "btn btn-success" style="margin-right: 5px;" title=""><i class="fa fa-edit"></i> Ubah</a>

                      <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href = "?page=kendaraan&aksi=hapus&id=<?php echo $data['kd_kendaraan'];?>" class = "btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>

                  </td>
                </tr>
                
                <?php }


                ?>
            </tbody>

        </table>
    </div>
</div>