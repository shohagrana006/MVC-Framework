<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User list</h1>
    <table>
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>email</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0;foreach ($datas as $dat) { ?>
            <tr>
                <td><?php echo ++$i  ?></td>
                <td><?php echo $dat['name'] ?></td>
                <td><?php echo $dat['email'] ?></td>
                <td><?php echo $dat['created_at'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <pre>
</body>
</html>