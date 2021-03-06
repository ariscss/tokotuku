<?php include_once "view/header.php"; 
include "../lib/koneksi.php";

?>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Data Barang</h4>
                        <p class="card-text">Total Barang</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-danger">
                    <div class="card-body">
                        <h4 class="card-title">Hot Sale</h4>
                        <p class="card-text">Total Barang</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success">
                    <div class="card-body">
                        <h4 class="card-title">New</h4>
                        <p class="card-text">Total Barang</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ml-1 mt-2">
        <h3>Data Barang</h3>
            <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modelTambah">
            Tambah
            </button>
                <table class="table table-striped table-inverse table-responsive mt-2">
                    <thead class="thead-inverse">
                        <tr>
                            <th>NO</th>
                            <th>Nama Barang</th>
                            <th>Spesifikasi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT nm_barang,spesifikasi,harga,gambar,stok,status,keterangan FROM barang";
                            $hasil = mysqli_query($konek, $sql);

                            if (mysqli_num_rows($hasil) > 0) {
                                // menampilkan hasil query
                                while ($row = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <tr>
                                <td scope="row"></td>
                                <td><?= $row["nm_barang"]; ?></td>
                                <td><?= $row["spesifikasi"]; ?></td>
                                <td><?= $row["harga"]; ?></td>
                                <td><img src="image/<?= $row["gambar"]; ?>" alt="..." class="img-thumbnail" width="100"></td>
                                <td><?= $row["stok"]; ?></td>
                                <td><?= $row["status"]; ?></td>
                                <td><?= $row["keterangan"]; ?></td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>


    
    <!-- Modal -->
    <div class="modal fade" id="modelTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Barang</h5>
                </div>
                <div class="modal-body">
                    <form action="insert_barang.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="namaBarang">Nama Barang</label>
                          <input type="text" name="namaBarang" id="namaBarang" class="form-control" placeholder="Nama Barang" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="spesifikasi">Spesifikasi</label>
                          <textarea class="form-control" name="spesifikasi" id="spesifikasi" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="harga">Harga</label>
                          <input type="number" name="harga" id="harga" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="stok">Stok</label>
                          <input type="number" name="stok" id="stok" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="form-control" name="status" id="status">
                            <option value="masukkan">Masukkan</option>
                            <option value="keluaran">Keluaran</option>
                            <option value="penyimpanan">Penyimpanan</option>
                            <option value="lain-lain">Lain-lain</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="keterangan">Keterangan</label>
                          <select class="form-control" name="keterangan" id="keterangan">
                            <option value="hotSale">Hot Sale</option>
                            <option value="new">New</option>
                          </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-success" name="simpan" id="simpan">Simpan</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

 <?php include_once "view/footer.php"; ?>