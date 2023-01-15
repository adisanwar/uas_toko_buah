<div class="col-mt-3">
<div class="container">
    
        <div class="card">
            <style>
                .stok-kosong {
                    font-color: red;
                }
            </style>
            <div class="card-header">
                Produk
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Produk</th>
                        <th>Deskripsi</th>
                    </tr>
                    <?php $no=1?>
                    
                    <?php foreach ($toko as $t) : ?>
                        <?php $img = 'assets/img';?>
                    <tr>
                        <td>
                         <?php echo $no;?></td>
                        <td width="200">                           
                        <img src="<?php echo 'assets/img/'.$t['gambarbuah'];?>" alt="" class="img-thumbnail" width="150" height="150">
                         
                       </td>
                        <td>
                            <p>Kode Buah&nbsp; : (<?php echo $t['Kodebuah'];?>)
                            <?php echo $t['Namabuah'];?>
                            </p>
                            <P>Jenis Buah&nbsp; : <?php echo $t['Jenisbuah'];?></P>
                            <p>Ketersediaan Stok&nbsp; :
                            <?php if ($t['Readystock'] == 1){
                                 echo 'Tersedia';
                            }else {
                                echo '<div class="stok-kosong">Kosong</div>';
                            }
                            ?></p>
                        </td> 
                        
                    </tr>
                    
                    <?php $no++;?>
                    
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>