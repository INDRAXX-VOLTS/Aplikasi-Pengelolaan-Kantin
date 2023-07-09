<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($databarang as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'databarang/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Nama Produk</label>
                <input type="text" name="namaProduk" class="form-control" value="<?php echo $mhs->namaProduk ?>">
            </div>   
            <div class="for-group">
                <label>Kode Produk</label>
                <input type="text" name="kodeProduk" class="form-control" value="<?php echo $mhs->kodeProduk ?>">
            </div>   
            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $mhs->kategori ?>">
            </div>   
            <div class="for-group">
                <label>Unit</label>
                <input type="text" name="unit" class="form-control" value="<?php echo $mhs->unit ?>">
            </div>   
            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $mhs->stok ?>">
            </div>   
            <div class="for-group">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" value="<?php echo $mhs->harga_jual ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>