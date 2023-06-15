<html>
  <head>
     <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3534/3534139.png">
    <title>Formulario</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php echo '<p>Registro</p>'; ?> 
    <hr>
        <form action="accion.php" method="post">
         <p>Nombre: <input type="text" name="nombre" /></p>
          <hr>
        <p>Apellido paterno: <input type="text" name="paterno" /></p>
          <hr>
        <p>Apellido materno: <input type="text" name="materno" /></p>
          <hr>
         <p>Su edad: <input type="text" name="edad" /></p>
          <hr>
         <p><input type="submit" /></p>
        </form>
          <!--
          This script places a badge on your repl's full-browser view back to your repl's cover
          page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
          teal, blue, blurple, magenta, pink!
          -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>