<div class="container row-mt-3">
    <div class="card">
        <div class="card-header">
            Registrasi
        </div>
        <div class="card-body">
           
            <form action="" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                    <small class="form-text text-danger"><?php echo form_error('nama_lengkap');?></small> 
                    
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
                    <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
                </div>
                <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div>
                            <?php foreach ($jenis_kelamin as $jk): ?>
                                    <input type="radio" name="jenis_kelamin" value="<?= $jk; ?>">
                                    <?php if ($jk == "LK"):
                                        echo 'Laki - Laki' ?>
                                    <?php elseif ($jk == "PR"):
                                        echo 'Perempuan' ?>
                                    <?php endif ?>
                                <?php endforeach; ?>
                                <?php echo form_error('jenis_kelamin');?>
                        </div>
                   
                <div class="col-md-6">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" aria-label="Default select example" name="provinsi" id="provinsi" >
                                <option selected>-- Pilih Provinsi --</option>
                                <?php foreach ($provinsi as $prov): ?>
                                    <option value="<?= $prov; ?>">
                                        <?= $prov; ?>
                                    </option>
                                <?php endforeach; ?>
                                
                            </select>                          
                </div>
                
                <div class="col-md-6">
                            <!-- <div class="row-mt-10"> -->
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="no_hp" class="form-control" id="no_hp" name="no_hp" placeholder="">
                    <small class="form-text text-danger"><?php echo form_error('no_hp'); ?></small>
                </div>    
                </div>

                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                         <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                        <small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
                </div>
                <br>
                <div class="col-md-3">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                   <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="" cols="">
                    <small class="form-text text-danger"><?php echo form_error('kode_pos'); ?></small>
                </div>
                <div >
                    <button type="submit" class="btn btn-primary" value="Batal">Register</button>
                    <a href="<?php echo base_url();?>" type="submit" class="btn btn-secondary" value="Batal">Batal</a>
                </div>
            </form>
                    
        </div>
    </div>
</div>
