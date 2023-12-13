<head>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".loading").fadeOut(1000);
        })
    </script>

<body>
    <div id="rounded">
        <div class="loading">
            <div class="loading">
                <div class="loading">
                    <div class="loading">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    body {
        background-color: #efefef !important
    }

    #rounded {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 120px;
        height: 120px;
    }

    .loading {
        padding: 5px;
        width: calc(100% - 0px);
        height: calc(100% - 0px);
        border: 3px solid #eaeaea;
        border-radius: 50%;
        border-top: 3px solid #09a804;
        border-bottom: 3px solid #e80606;
        animation: rotate 5s linear infinite;
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg)
        }
    }
</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Detail Produk</div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_barang ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>

                            <tr>
                                <td>Detail</td>
                                <td><p><?php echo $brg->detail ?></p></td>
                            </tr>


                        </table>
                        <?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                        <?php echo anchor('welcome', '<div class="btn btn-sm btn-secondary">Kembali</div>') ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>