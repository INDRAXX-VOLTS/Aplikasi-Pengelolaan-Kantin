<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datapenjualan as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datapenjualan/update' ?>">
         
            <div class="for-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <select name="nama_barang" class="form-control">
                <option value="">-----Pilih Barang-----</option>
                <?php foreach ($data_barang as $barang) : ?>
                  <option value="<?php echo $barang['nama_barang']; ?>"><?php echo $barang['nama_barang']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="for-group">
                <label>Harga Barang</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                <input type="text" name="harga_barang" class="form-control" value="<?php echo $mhs->harga_barang ?>">
            </div>
            <div class="for-group">
                <label>Qty</label>
                <input type="text" name="qty" class="form-control" value="<?php echo $mhs->qty ?>">
            </div>
            <div class="for-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" value="<?php echo $mhs->total ?>">
            </div>
            
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>