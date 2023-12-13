<div class="container-fluid">
    <h3 class="fas fa-edit">EDIT DATA PRODUK</h3>

    <?php foreach ($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_produk/update' ?>">
            <div class="for-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
            </div>

            <div class="for-group">
                <label for="">Keterangan</label>
                <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label for="">Kategori Produk</label> <br>
               <h7><select name="kategori" class="form-control">
                                <option value="bajuRok">Baju & Rok</option>
                                <option value="sepatuSendal">Sepatu & Sendal</option>
                                <option value="tasAksesoris">Tas & Aksesoris</option>
                                <option value="topiHijab">Topi & Hijab</option>
                            </select>
                    <input type="hidden" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>

            <div class="for-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group">
                <label for="">Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>