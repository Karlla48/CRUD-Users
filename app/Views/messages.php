<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Mensagens</title>
</head>
<body>

    <div class="container">
    <div class= "alert alert-info">
        <?php echo $message; ?>
        <p><?php echo anchor(base_url(), 'Página Inicial')?></p>

    </div>
    </div>
    
</body>
</html>