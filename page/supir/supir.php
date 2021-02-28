          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Supir </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href = "?page=supir&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px;" title="">Tambah Data</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">ID Supir</th>
                  <th style="text-align:center">Nama</th>
                  <th style="text-align:center">Tanggal Lahir</th>
                  <th style="text-align:center">Alamat</th>
                  <th style="text-align:center">No Telpon</th>
                  <th style="text-align:center">Jenis Kelamin</th>
                  <th style="text-align:center">NIK</th>
                  <th style="text-align:center">Aksi</th>
                </tr>
                </thead>
                <tbody>

                	<?php

                		$no =1;
                		$sql = $koneksi->query("select * from tb_supir");

                		while ($data = $sql->fetch_assoc()){

                		
                	?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['id_supir']; ?></td>
                  <td><?php echo $data['nama_supir']; ?></td>
                  <td><?php echo $data['tgl_lahir']; ?></td>
                  <td><?php echo $data['alamat_supir']; ?></td>
                  <td><?php echo $data['no_telp']; ?></td>
                  <td><?php echo $data['jenis_kelamin']; ?></td>
                  <td><?php echo $data['NIK']; ?></td>
                  <td>
                      <a href = "?page=supir&aksi=ubah&id=<?php echo $data['id_supir'];?>" class = "btn btn-success" style="margin-right: 3px;" title=""><i class="fa fa-edit"></i> Ubah</a>

                      <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href = "?page=supir&aksi=hapus&id=<?php echo $data['id_supir'];?>" class = "btn btn-danger" title=""><i class="fa fa-trash"></i> Hapus</a>

                  </td>
                </tr>
                
                <?php }


                ?>
            </tbody>

        </table>
    </div>
</div>