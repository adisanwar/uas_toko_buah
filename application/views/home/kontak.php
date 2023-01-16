<div class="container">
    <div class="card">
        <div class="card-header">
            Hubungi Kami
        </div>
        <div class="card-body">
         
            <form action="" method="post" class="row g-3">
            <div hidden class="col-md-6">
                    <label for="Tanggalkirim" class="form-label"></label>
                    <input type="text" class="form-control" id="Tanggalkirim" name="Tanggalkirim" value="<?php echo date("Y-m-d");?>"> 
                </div>
                <div class="col-md-6">
                    <label for="namapengirim" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namapengirim" name="namapengirim">
                    <small class="form-text text-danger"><?= form_error('namapengirim'); ?></small> 
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="emailpengirim" name="emailpengirim" placeholder="example@mail.com">
                    <small class="form-text text-danger"><?= form_error('emailpengirim'); ?></small>
                </div>
                <div class="col-12">
                    <label for="kategoripesan" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategoripesan" id="kategoripesan" >
                                <option selected>-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $kat): ?>
                                    <option value="<?= $kat; ?>">
                                        <?= $kat; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('kategoripesan'); ?></small>
                </div>
                <div class="col-12">
                    <label for="Subjekpesan" class="form-label">Subjek Pesan</label>
                    <input type="text" class="form-control" id="Subjekpesan" name="Subjekpesan"
                        placeholder="">
                        <small class="form-text text-danger"><?= form_error('Subjekpesan'); ?></small>
                </div>
                <div class="">
                    <label for="Isipesan" class="form-label">Isi Pesan</label>
                    <textarea class="form-control" id="Isipesan" name="Isipesan" rows="7"></textarea>
                    <small class="form-text text-danger"><?= form_error('Isipesan'); ?></small>
                </div>
                <div class="col-12">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" value="Kirim" name="kirim" id="kirim">Kirim</button>
                    <a href="<?php echo base_url();?>" type="submit" class="btn btn-secondary" value="Batal">Batal</a>
                </div>
            </form>
            <?php if (validation_errors()) :?>
            <?php endif;?>
        </div>
    </div>
</div>
</div>