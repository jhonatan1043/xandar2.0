<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/'); ?>img/Qual.ico">
    <title>Xandar</title>
</head>

<body>
    <!----------------------- main container log in page ------------------------->
    <section class="container">
        <div class="tittle">
            <h1>XANDAR</h1>
            <p>Sistema contable y de inventario</p>
        </div>

        <div class="form">
            <form action="">
                <label for="User">Usuario</label> <br>
                <div class="user">
                    <img src="<?php echo base_url('assets/'); ?>/img/user.svg" alt="user icon" class="icon">
                    <input type="text" id="User" name="User" placeholder="xandar" class="user" required> <br>
                </div>

                <label for="Password">Password</label> <br>
                <div class="password-icono">
                    <img src="<?php echo base_url('assets/'); ?>/img/lock.svg" alt="password input" class="icon">
                    <input type="password" id="Password" name="Password" class="password" placeholder="Password"
                        required> <br>
                    <img src="<?php echo base_url('assets/'); ?>/img/eye.svg" alt="see password" class="icon">
                </div>

                <label for="Select">Cliente</label><br>

                <select name="Empresa" id="Empresa" required>
                    <option select value="0">--Seleccione--</option>
                </select> <br>

                <div class="boton">
                    <input type="submit" value="Entrar" class="btn">
                </div>

            </form>
        </div>

    </section>

</body>

</html>