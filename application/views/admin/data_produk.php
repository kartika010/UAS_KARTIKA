<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_produk"> <i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3" style="text-align: center;">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_barang ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td>Rp <?php echo number_format($brg->harga, 0, ',', '.') ?> </td>
                <td><?php echo $brg->stok ?></td>
                <td>

                    <!-- Melihat Detail Barang -->
                    <?php echo anchor('welcome/detail_barang_admin/' . $brg->id_barang, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?>
                </td>
                <!-- Mengedit Produk -->
                <td> <?php echo anchor('admin/data_produk/edit/' . $brg->id_barang, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </td>

                <!-- Menghapus Produk -->
                <td> <?php echo anchor('admin/data_produk/hapus/' . $brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value=" ">
                    </div>

                    <div class="form-group">
                        <label for="">Kategori Produk</label> <br>
                        <h7><select name="kategori" class="form-control">
                                <option value="bajuRok">Baju & Rok</option>
                                <option value="sepatuSendal">Sepatu & Sendal</option>
                                <option value="tasAksesoris">Tas & Aksesoris</option>
                                <option value="topiHijab">Topi & Hijab</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Detail Produk</label>
                        <textarea type="text" name="detail" class="form-control" rows="3"></textarea>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>