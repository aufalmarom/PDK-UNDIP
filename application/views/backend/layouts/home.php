<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Data</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $item) : ?>
            <tr>
                <td><?php echo $item['nama']; ?></td>
                <td><?php echo $item['umur']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
