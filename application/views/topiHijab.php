<!-- <div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/slider-1.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/slider2.jpg') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/slider2.jpg') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
<br>
<h5 class="ml-4" style="color: gray; font-family: Arial, Helvetica, sans-serif; font-style: oblique;">Kategori : Topi
    Dan Hijab</h5>

<div class="row text-center mt-4 ml-3">
    <?php foreach ($topiHijab as $brg) : ?>
    <div class="card ml-3 mb-3" style="width: 16rem;">
        <img class="card-img-top" src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" alt="Card image cap"
            class="card-img-top">
        <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
            <small><?php echo $brg->keterangan ?></small> <br>
            <span class="badge badge-success mb-3" style="font-size: 14px;">Rp
                <?php echo number_format($brg->harga, 0, ',', '.')  ?> </span><br>
            <?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
            <?php echo anchor('welcome/detail/' . $brg->id_barang, '<div class="btn btn-sm btn-success">Detail</div>') ?>
        </div>
    </div>
    <?php endforeach ?>
</div>
</div>