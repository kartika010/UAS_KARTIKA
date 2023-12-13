<tr>
    <td colspan="4">
        <?php $attributes = array('class' => 'row'); ?>
        <?php echo form_open('SearchController/search', $attributes); ?>
        <input type="text" name="keyword" placeholder="search" class="form-control col-md-5">
        <input type="submit" value="Cari" class="btn btn-warning col-md-1">
        <?php echo form_close(); ?>
    </td>
</tr>

<div id="container">
    <div class="row text-center mt-4">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" alt="Card image cap" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
                    <small><?php echo $brg->keterangan ?></small> <br>
                    <span class="badge badge-success mb-3" style="font-size: 14px;">Rp <?php echo number_format($brg->harga, 0, ',', '.')  ?> </span><br>
                    <?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                    <?php echo anchor('welcome/detail/' . $brg->id_barang, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>