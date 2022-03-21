<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    <div class="container">
    
    <?php echo form_open('user/store')?>
    <div class= "form-group">]
        <label for="username">Username</label>
        <input type="text" value="<?php echo isset($user['username']) ? $user['username'] :'' ?>" name="username" id="username" class="form_control">
    </div>
    <div class= "form-group">]
        <label for="name">Name</label>
        <input type="text" value="<?php echo isset($user['name']) ? $user['name'] :'' ?>"  name="name" id="name" class="form_control">
    </div>
    <div class= "form-group">]
        <label for="lastname">Lastname</label>
        <input type="text" value="<?php echo isset($user['lastname']) ? $user['lastname'] :'' ?>" name="lastname" id="lastname" class="form_control">
    </div>
    <div class= "form-group">]
        <label for="email">Email</label>
        <input type="email" value="<?php echo isset($user['email']) ? $user['email'] :'' ?>" name="email" id="email" class="form_control">
    </div>
    <input type="submit" value="Salvar">
    <input type="hidden" name="id" value="<?php echo isset($user['id'])? $user['id']:'' ?>" >
    <?php echo form_close();?>
    </div>
    
</body>
</html>