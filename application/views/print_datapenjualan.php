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
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th>
        <th>QTY</th>
        <th>TOTAL</th>
        </tr>

    <?php
    $no = 1;
    foreach ($datapenjualan as $mhs) : ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->tanggal ?></td>
        <td><?php echo $mhs->nama_barang ?></td>
        <td><?php echo $mhs->harga_barang ?></td>
        <td><?php echo $mhs->qty ?></td>
        <td><?php echo $mhs->total ?></td>
    </tr>

    <?php endforeach; ?> 
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>