<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa STTTNF</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="kelamin" value="laki-laki">
            <label for="">Laki-Laki</label>
        <input type="radio" name="kelamin" value="perempuan">
            <label for="">Perempuan</label><br><br>

        <!-- tipe checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="mata_kuliah" value="basis data">
            <label for="">Basis Data</label><br>
        <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris">
            <label for="">Bahasa Inggris</label><br><br>

        <!-- tipe number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br><br>

        <!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="teknik informatika">Teknik Informatika</option>
            <option value="sistem informasi">Sistem Informasi</option>
            <option value="bisnis digital">Bisnis Digital</option>
        </select><br><br>

        <!-- button -->
        <button type="submit">Kirim</button>
        <button type="button">Contoh</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>