<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Tambahkan Biodata Anda</h2>
    <form method="post">
        @csrf <!-- Laravel CSRF protection -->
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input name="nama" type="text" size="20" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input name="email" type="text" size="20" /></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td>:</td>
                <td><input name="no_hp" type="text" size="20" /></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Kirim" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
