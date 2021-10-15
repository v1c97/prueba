<! DOCTYPE html >
< html >
  < cabeza >
    < meta  charset = " utf-8 " >
    < título > Iniciar sesión </ título >
    < link  href = " https://fonts.googleapis.com/css?family=Roboto " rel = " hoja de estilo " >
    < link  rel = " stylesheet " href = " css / s.css " >
  </ cabeza >

  < body  background = " images / f1.png " style = " background-repeat: no-repeat; background-size: cover;
        -moz-background-size: portada;
        -webkit-background-size: portada;
        -o-background-size: cover; " >
  < Br >  < br > < br > < br > < br > < br > < br > < br > < br > < br >
  < h1 > INICIAR SESIÓN </ h1 >
  < div  >
    < form  action = " login.php " method = " POST " >
     < H2  align = " center " >      < input  name = " usuario " type = " text " id = " usuario " placeholder = " USUARIO " >  </ H2 >
      < H3  align = " center " >   < input  name = " password " type = " password " id = " password " placeholder = " CONTRASEÑA " >  </ H3 > 
      < H4 >  <? Php
       if ( isset ( $ _GET [ "fallo" ]) && $ _GET [ "fallo" ] == 'true' )
       {
          echo  "<div style = 'color: red'> Usuario o contraseña invalido </div>" ;
       }
       if ( isset ( $ _GET [ "fallo" ]) && $ _GET [ "fallo" ] == 'true1' )
       {
          echo  "<div style = 'color: red'> Usuario bloqueado </div>" ;
       }
     ?> </ H4 >
      < H5  align = " center " > < input  type = " submit " name = " submit " value = " INGRESAR " >  </ H5 >
    </ formulario >
    </ div >
  </ cuerpo >

</ html 