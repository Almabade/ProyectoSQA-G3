<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.E. ALAN TURING</title>
</head>
<body>
    <h1>Autenticación ok</h1>
    <?php 
        // sirve para usar la variable $_SESSION
        session_start();

        
        if(isset($_SESSION['datos_usuario'])) {
            if($_SESSION['role'] == 'padre'){
                header('Location: perfil_padre.php');
            }
            else if($_SESSION['role'] == 'docente'){
                header('Location: perfil_docente.php');
            }
            else if($_SESSION['role']=='administrador'){
                header('Location: admin_principal.php');
            }
        }
        else {
            header("location: login.php");
        }
    ?>

    <a href="src/cerrar_sesion.php">cerrar sesion</a>
</body>
</html>