<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo2.png">
    <script src="https://kit.fontawesome.com/8a7c80030f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
    
    <div class="container">

        <form action="#" method="POST" class="form">

            <h1>Bienvenido</h1>
            <h3>Inicia Sesión</h3>

            <label for="email">
                <i class="fa-solid fa-user"></i>
                <input type="email" placeholder="Email:" id="email" name="email" required>
            </label>
        
            <label for="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Contraseña:" id="password" name="password" required>
            </label>
            
            <a href="views/registro.php" class="link">¿Aun No tiene una Cuenta? ¡Registrese Ya!</a>
            
            <div class="buttons">
                <button type="submit" id="btn_acept">
                    <span>Aceptar</span>
                    <i class="fa-regular fa-circle-right"></i>
                </button>
            
                <button type="reset" id="btn-cancel" class="btn-cancel">
                    <span>Cancelar</span>
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>
                  
        </form>

    </div>

</body>
</html>