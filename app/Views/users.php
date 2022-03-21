<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <section class="container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['lastname']?></td>
                    <td><?php echo $user['email']?></td>
                    <td>Ações</td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </section>

</body>
</html>