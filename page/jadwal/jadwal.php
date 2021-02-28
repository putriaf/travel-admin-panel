          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jadwal Keberangkatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href = "?page=jadwal&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;" title="">Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Id Jadwal</th>
                  <th style="text-align:center">Kode Kendaraan</th>
                  <th style="text-align:center">Pool Berangkat</th>
                  <th style="text-align:center">Pool Tujuan</th>
                  <th style="text-align:center">Waktu Keberangkatan</th>
                  <th style="text-align:center">Harga Tiket</th>
                  <th style="text-align:center">Aksi</th>
                </tr>
                </thead>
                <tbody>

                	<?php

                		$no =1;
                		$sql = $koneksi->query("select * from tb_jadwal");

                		while ($data = $sql->fetch_assoc()){

                		
                	?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['id_jadwal']; ?></td>
                  <td><?php echo $data['kd_kendaraan']; ?></td>
                  <td><?php echo $data['pool_berangkat']; ?></td>
                  <td><?php echo $data['pool_tujuan']; ?></td>
                  <td><?php echo $data['waktu_berangkat']; ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td>
                      <a href = "?page=jadwal&aksi=ubah&id=<?php echo $data['id_jadwal'];?>" class = "btn btn-success" style="margin-bottom: 5px;" title=""><i class="fa fa-edit"></i> Ubah</a>

                      <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href = "?page=jadwal&aksi=hapus&id=<?php echo $data['id_jadwal'];?>" class = "btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>

                  </td>
                </tr>
                
                <?php }


                ?>
            </tbody>

        </table>
    </div>
</div>