<html>
  <head>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3534/3534139.png">
    <title>Formulario</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
    DATOS CAPTURADOS <br>
    Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br>
    Edad:<?php echo (int)$_POST['edad']; ?> 

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>