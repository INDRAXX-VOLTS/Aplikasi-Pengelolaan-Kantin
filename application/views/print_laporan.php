<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <table>
        <tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>TOTAL PENJUALAN</th>
        <th>TOTAL PEMASUKAN TENANT</th>
        <th>TOTAL PENGELUARAN</th>
        </tr>

    <?php
    $no = 1;
    foreach ($laporan as $mhs) : ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->tanggal ?></td>
        <td>Rp <?php echo number_format($mhs->total_datapenjualan, 0, ',', '.') ?></td>
        <td>Rp <?php echo number_format($mhs->total_pemasukantenant, 0, ',', '.') ?></td>
        <td>Rp <?php echo number_format($mhs->total_datapengeluaran, 0, ',', '.') ?></td>
    </tr>

    <?php endforeach; ?> 
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>