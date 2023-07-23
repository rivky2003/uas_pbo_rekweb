<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center">
        <h3 align="center">Nilai mahasiswa</h3>
        <center><a href="/mahasiswa">Mahasiswa</a>
            <a href="/mata_kuliah">Mata kuliah</a>
        </center>
        <br>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nim</th>
                <th>Kode mk</th>
                <th>Grade</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($nilai as $item) : ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["nim"] ?></td>
                    <td><?= $item["kode_mk"] ?></td>
                    <td><?= $item["nilai"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>