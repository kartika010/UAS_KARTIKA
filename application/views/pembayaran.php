<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                // Melakukan pengecekan dan perhitungan total belanja dari keranjang belanja user.
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h6>Total Belanja Anda : Rp " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h3>Form Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">No. HP</label>
                    <input type="text" name="nohp" placeholder="Nomor HP" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="jasa" id="" class="form-control">
                        <option value="JNE">JNE</option>
                        <option value="JNT">JNT</option>
                        <option value="TIKI">TIKI</option>
                        <option value="POST INDONESIA">POST INDONESIA</option>
                        <option value="GRAB">GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select name="rekening_tujuan" id="" class="form-control">
                        <option value="BCA - 09876543 ">BCA - 09876543 </option>
                        <option value="BNI - 12345678">BNI - 12345678</option>
                        <option value="BSI - 90123456">BSI - 90123456</option>
                        <option value="BTN - 01234567">BTN - 01234567</option>
                        <option value="MANDIRI - 02468904">MANDIRI - 02468904</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-4">PESAN</button>

            </form>

        <?php
                } else {
                    echo  "<h5> anda masih kosong:)";
                }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>