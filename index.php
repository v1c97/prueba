
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/s.css">
  </head>
  
  <body background="images/f1.png"style-lund-repeat no-repeat;background-size: cover;-l
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;">
  <br> <br><br><br><br><br><br><br><br><br>
  <h1>LOGIN </h1>
  <div >
    <form action="login.php" method="POST">
     <H2 align="center" >     <input name="usuario" type="text" id="usuario" placeholder="USUARIO"> </H2>
      <H3 align="center" >  <input name="password" type="password" id="password"placeholder="CONTRASEÑA"> </H3> 
      <H4> <?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red'>Usuario o contraseña invalido </div>";
       }
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true1')
       {
          echo "<div style='color:red'>Usuario bloqueado  </div>";
       }
     ?></H4>
      <H5 align="center"><input type="submit" name="submit" value="INGRESAR"> </H5>
    </form>
    </div>
  </body>

</html>

