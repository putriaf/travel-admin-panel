          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemesanan Tiket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href = "?page=pemesanan&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;" title="">Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Kode Pemesanan</th>
                  <th style="text-align:center">Id Pengguna</th>
                  <th style="text-align:center">Id Jadwal</th>
                  <th style="text-align:center">Jumlah Tiket</th>
                  <th style="text-align:center">Tanggal Pesan</th>
                  <th style="text-align:center">Tanggal Bayar</th>
                  <th style="text-align:center">Total Bayar</th>
                  <th style="text-align:center">Status Pesan</th>
                  <th style="text-align:center">Aksi</th>
                  
                </tr>
                </thead>
                <tbody>

                	<?php

                		$no =1;
                		$sql = $koneksi->query("select * from tb_pemesanan");

                		while ($data = $sql->fetch_assoc()){

                		
                	?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['kd_pemesanan']; ?></td>
                  <td><?php echo $data['id_pengguna']; ?></td>
                  <td><?php echo $data['id_jadwal']; ?></td>
                  <td><?php echo $data['jml_tiket']; ?></td>
                  <td><?php echo $data['tgl_pesan']; ?></td>
                  <td><?php echo $data['tgl_bayar']; ?></td>
                  <td><?php echo $data['total_bayar']; ?></td>
                  <td><?php echo $data['status_pesan']; ?></td>
                  <td>
                      <a href="?page=pemesanan&aksi=ubah&id=<?php echo $data['kd_pemesanan'];?>" class="btn btn-success" style="margin-bottom: 5px;" title=""><i class="fa fa-edit"></i> Ubah</a>
                      <a onclick="return confirm ('Apa Anda Yakin Menghapus Data Ini?')" href="?page=pemesanan&aksi=hapus&id=<?php echo $data['kd_pemesanan'];?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>
                  </td>
                  
                </tr>
                
                <?php }


                ?>
            </tbody>

        </table>
    </div>
</div>