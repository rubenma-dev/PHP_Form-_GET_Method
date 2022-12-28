<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="estilosGet.css">
</head>
<body>
    <header>
        <h1 style= "color: #fff" div aling="center";>Realizar dos formularios en PHP,
         uno que permita enviar datos usando el método POST y el otro usando el método GET.</h1>
    </header>
        <nav>
            <p style= "color: #fff">PROGRAMACION III - ALUMNO: GUILLERMO ARGUELLO</p>
        </nav>
        <section>
            <form name="formulario" id="formulario" method="get" action="receptionGet.php">
                <p style="color: #fff">FORMULARIO EN PHP - METODO GET</p>
                <p style="color: #fff;">Ingrese Nombre</p>
                <input type="text" name="nombre" id="nombre">
                <br>
                <br>
                <p style="color: #fff;">Ingrese correo electronico</p>
                <input type="email" name="email">
                <br>
                <br>
                <p style="color: #fff;">Ingrese contraseña</p>
                <input type="password" name="pwd">
                <br>
                <p style="color: #fff;">FECHA de nacimiento</p>
                <input type="date" name="fecha">
                <br>
                <p style="color: #fff;">HORA</p>
                <input type="time" name="hora">
                <br>
                <p style="color: #fff;">Ciudad</p>
                <input type="datalist" name="ciudad">
                <br>
                <p style="color: #fff;">Elija un Numero</p>
                <input type="number" name="numero" min="-10" max="10">
                <br>
                <p style="color: #fff;">Color Favorito</p>
                <input type="color" name="color">
                <br>
                <p style="color: #fff;">Deje un Mensaje</p>
                <input type="text" name="mensaje">
                <input type="submit" value="enviar">
            </form>
        </section>
        <aside>
            <div>
                <img src="img/get.png">
            </div>
        </aside>
        <footer>
           <a>Todos los derechos reservados - Guillermo Arguello</a>
        </footer> 
</body>
</html>
