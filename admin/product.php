<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
            <div class="panel-heading">
            Table barang
            </div>
            <div class="panel-body">
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                        <thead>
                              <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Stok</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                        <!-- query data -->
                        <?php $result = mysqli_query($conn,"SELECT * FROM barang ORDER BY id ASC"); ?>
                        <?php
                        $i = 1;
                        while($data = mysqli_fetch_assoc($result)){
                        ?>
                        <!-- end of php -->
                              <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td>
                                          <img src="../assets/images/<?= $data['gambar']; ?>" width="90" alt="...">
                                    </td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['deskripsi'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['jenis'] ?></td>
                                    <td>
                                          <a href="index.php?halaman=ubahproduk&id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                                          <a href="index.php?halaman=hapusproduk&id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin dihapus')">hapus</a>
                                    </td>
                              </tr>
                        <?php $i++; } ?>
                        </tbody>
                  </table>
                  </div>
            </div>
      </div>
</div>