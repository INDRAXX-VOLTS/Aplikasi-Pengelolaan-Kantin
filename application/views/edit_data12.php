<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($datatransaksi as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'datatransaksi/update' ?>">
         
            <div class="for-group">
                <label>kodeProduk</label>
                <input type="text" name="kodeProduk" class="form-control" value="<?php echo $mhs->kodeProduk ?>">
            </div>
            <div class="for-group">
                <label>namaProduk</label>
                <input type="text" name="namaProduk" class="form-control" value="<?php echo $mhs->namaProduk ?>">
            </div>
            <div class="for-group">
                <label>tanggal</label>
                <input type="text" name="tanggal" class="form-control" value="<?php echo $mhs->tanggal ?>">
            <div class="for-group">
                <label>total</label>
                <input type="text" name="total" class="form-control" value="<?php echo $mhs->total ?>">
            <div class="for-group">
                <label>dibayar</label>
                <input type="text" name="dibayar" class="form-control" value="<?php echo $mhs->dibayar ?>">

            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>