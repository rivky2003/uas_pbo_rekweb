<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <h3 align="center">Mata kuliah</h3>
        <center><a href="/mahasiswa">Mahasiswa</a>
            <a href="/nilaimhs">Nilai</a>
        </center>
        <br>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama_mk</th>
                <th>Sks</th>
                <th>Semester</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mata_kuliah as $item) : ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["nama_mk"] ?></td>
                    <td><?= $item["sks"] ?></td>
                    <td><?= $item["semester"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>