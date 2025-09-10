<html>

<head>
    <title>Simpan Biodata</title>
</head>

<body>
    <h1>Data Biodata Mahasiswa</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo $_POST['nim']; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $_POST['jurusan']; ?></td>
        </tr>
        <tr>
            <td>Kampus</td>
            <td>:</td>
            <td><?php echo $_POST['kampus']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $_POST['alamat']; ?></td>
    </table>
</body>

</html>
