<div class="container">
    <div class="card">
        <div class="card-header">
            Registrasi
        </div>
        <div class="card-body">
            
            <form action="" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim">
                    <small class="form-text text-danger"><?= form_error('nama_pengirim'); ?></small> 
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="col-12">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" >
                                <option selected>-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $kat): ?>
                                    <option value="<?= $kat; ?>">
                                        <?= $kat; ?>
                                    </option>
                                <?php endforeach; ?>
                                
                            </select>
                           
                </div>
                <div class="col-12">
                    <label for="subjek" class="form-label">Subjek Pesan</label>
                    <input type="text" class="form-control" id="subjek" name="subjek"
                        placeholder="">
                        <small class="form-text text-danger"><?= form_error('subjek'); ?></small>
                </div>
                <div class="">
                    <label for="isi_pesan" class="form-label">Isi Pesan</label>
                    <textarea class="form-control" id="isi_pesan" name="isi_pesan" rows="7"></textarea>
                    <small class="form-text text-danger"><?= form_error('isi_pesan'); ?></small>
                </div>
                <div class="col-12">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" value="Batal">Kirim</button>
                    <a href="<?php echo base_url();?>" type="submit" class="btn btn-secondary" value="Batal">Batal</a>
                </div>
            </form>
           
        </div>
    </div>
</div>
</div>