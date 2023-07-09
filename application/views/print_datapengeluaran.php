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
        <th>tenant</th>
        <th>TOTAL</th>
        </tr>

    <?php
    $no = 1;
    foreach ($datapengeluaran as $mhs) : ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->tanggal ?></td>
        <td><?php echo $mhs->tenant ?></td>
        <td><?php echo $mhs->total ?></td>
    </tr>

    <?php endforeach; ?> 
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>