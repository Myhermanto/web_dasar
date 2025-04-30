<html>

<head>Data Mahasiswa</head>

<body>
    <h1>Data Mahasiswa</h1>
    <?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $status = $_POST['status'];

    ?>
    <a href="mahasiswa.php">Input data lagi</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>alamat</td>
            <td>Jenis Kelamin</td>
            <td>Program Studi</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $nim ?></td>
            <td><?php echo $nama ?></td>
            <td><?php echo $alamat ?></td>
            <td><?php echo $jk ?></td>
            <td><?php echo $prodi ?></td>
            <td><?php echo $status ?></td>

        </tr>

    </table>
</body>

</html>