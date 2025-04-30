<html>

<head>
    <title>Data Mahasiswa</title>

<body>
    <h1><u>Data Mahasiswa</u></h1>
    <form action="data_mahasiswa.php" method="post">
        <label>Nim:</label>
        <input type="text" name="nim" width="200" placeholder="ketikan nim anda disini..">
        <br>
        <br>
        <label>Nama:</label>
        <input type="text" name="nama" placeholder="ketikan nana anda disini..">
        <br>
        <br>
        <label>Alamat:</label>
        <textarea name="alamat" placeholder="ketikan alamat.."></textarea>
        <br>
        <br>
        <label>Jenis Kelamin:</label>
        <input type="radio" name="jk" value="Laki-laki">Laki-laki
        <input type="radio" name="jk" value="Perempuan">Perempuan
        <br>
        <br>
        <label>Program Studi:</label>
        <select name="prodi">
            <option>D3 Teknologi Informasi</option>
            <option>D3 Kebidanan</option>
            <option>D4 Kebidanan</option>
            <option>D4 Laboratorium Medis</option>
        </select>
        <br>
        <br>
        <label>Status Kuliah: </label>
        <input type="checkbox" name="status" value="Aktif">Aktif
        <input type="checkbox" name="status" value="Tidak Aktif">Tidak Aktif
        <br><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Batal">
    </form>
</body>

</html>