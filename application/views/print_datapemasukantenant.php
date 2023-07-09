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
        <th>NAMA TENANT</th>
        <th>TOTAL PEMASUKAN TENANT</th>
        </tr>

    <?php
    $no = 1;
    foreach ($datapemasukantenant as $mhs) : ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->tanggal ?></td>
        <td><?php echo $mhs->nama_tenant ?></td>
        <td><?php echo $mhs->total_pemasukantenant ?></td>
    </tr>

    <?php endforeach; ?> 
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>