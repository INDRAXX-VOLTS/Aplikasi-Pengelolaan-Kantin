<section style="width: 1000px; margin-left:20% " class="content">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($unit as $mhs) : ?>

         <form method="post" action="<?php echo base_url() . 'unit/update' ?>">
         
            <div class="for-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
            </div>
            <div class="for-group">
                <label>Unit</label>
                <input type="text" name="unit" class="form-control" value="<?php echo $mhs->unit ?>">
                
            </div>   
            <button type="submit" class="btn btn-primary btn-sn">Simpan</button>

         </form>   
        
        <?php endforeach; ?>
</div>