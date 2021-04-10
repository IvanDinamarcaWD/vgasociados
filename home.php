<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="imagenes/logo-pestania.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/1cb5d2ca1c.js" crossorigin="anonymous"></script>
</head>
<?php

    $nombreusuario = "JUAN";

?>

<body>
    <nav>
        <div class="navhome">
            <div class="textonavbienvenido">
                BIENVENIDO(A) <?php echo $nombreusuario ?>
            </div>
            <div class="logo">
                <img src="imagenes/logo-letra.png" alt="" class="logo-letra">
            </div>
            <a href="">
                <div class="divsnavhome">
                    <div class="iconoshome">
                        <i class="far fa-bell"></i>
                    </div>
                    <div class="textosnavhome">
                        NOTIFICACIONES
                    </div>
                </div>
            </a>
            <a href="index.php">
                <div class="divsnavhome">
                    <div class="iconoshome">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <div class="textosnavhome">
                        SALIR
                    </div>
                </div>
            </a>
        </div>
    </nav>
    <div class="bodyhome">
            <table>
                <thead>
                    <tr>
                        <td>Dirección</td>
                        <td>Plan</td>
                        <td>Vencimiento</td>
                        <td>Facturas</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Perico los palotes 64</td>
                        <td>Trimestral</td>
                        <td>11/2/2022</td>
                        <td class="pdffactura"><i class="fas fa-file-pdf"></i></td>
                    </tr>
                </tbody>
        </table>
    </div>

    <footer>
        <?php

            include("footer.php");
        
        ?>
    </footer>
    <?php
    
        include("llamadaywhatsapp.php");
    
    ?>
</body>
</html>