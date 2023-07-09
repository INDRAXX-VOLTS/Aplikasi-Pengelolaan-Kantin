<div class="content-wrapper">
    <section class="content">
        <br>
        <h4><strong>DETAIL DATA TRANSAKSI</strong></h4>

        <table class="table">
            <tr>
                <th>Kode</th>
                <td><?php echo $detail->kode ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tanggal ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><?php echo $detail->total ?></td>
            </tr>
            <tr>
                <th>Dibayar</th>
                <td><?php echo $detail->dibayar ?></td>
            </tr>
            <tr>
                <th>Kembali</th>
                <td><?php echo $detail->kembali ?></td>
            </tr>
        </table>
        <a href="<?php echo base_url('datatransaksi/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>