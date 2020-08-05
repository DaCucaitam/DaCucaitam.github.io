<head>
<title>FUNCIONES PARA MANIPULACIÓN DE CADENA</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
<body>
    <style>
        Body{
            margin-left:200px;
            margin-top:100px;
            background-color:#3b3b3b;
            color:silver;
            font-family: 'Merienda', cursive;
            font-size:22;
        }
        hr{
            border: 8px solid white;
            border-radius: 5px;
            position: absolute;
            width: 20em;
        }
        #Titulo{
            font-family: 'Chelsea Market', cursive;
            background: linear-gradient(black,black);
            -webkit-background-clip: text;
            color: transparent;
            position:initial;
        }
        h1{
            font-family: 'Chelsea Market', cursive;
            background: linear-gradient(black,black);
            -webkit-background-clip: text;
            color: transparent;
            text-align: left;
        }
        table, th, td {
        border: 1px solid black;
        text-align: center;
        }
        tr.title{
            background-color: #000000f2;
        }
        tr.even{
            background-color: #e30202e0;
        }
        tr.bug{
            background-color: #384fe0e0;
        }
    </style>
</body>
<?php
echo"<h1 id='Titulo'>FUNCIONES PARA MANIPULACIÓN DE CADENA</h1>";
echo"<h1>1) Substr</h1>";
echo"<hr><br>";
print (substr ('Bienvenido al Portal de Coches', 14));
print ('<br>');/*En definitiva, con esta función lo que conseguimos es mostrar la parte que nos interesa de una cadena de texto. */
print (substr ('Bienvenido al Portal de Coches', -6));
echo"<hr><br><br>";

echo"<h1>2) Ord</h1>";
echo"<hr><br>";
for ($i=1; $i<=255; $i++) 
{/* Incrementamos la variable $i desde 1 hasta 255, para poder representar todos los caracteres. */
print ('ASCII: '.$i.' -< caracter: '. chr($i). '<br>');
/* Mostrara en pantalla cada código ASCII con su correspondiente carácter.  */}
//No se porque no deja visualizar todo el codigo ASCII :(( supuse que iba a funcionar...
echo"<hr><br>";

echo"<h1>3) PRINTF Y SPRINTF</h1>";
echo"<hr><br><br>";
echo"<table><tr class='title'><th>Instrucción</th><td><b>Acción</b></td></tr><tr class='bug'><th>b</th><td>Devuelve entero binario</td></tr><tr class='even'><th>d</th><td>Devuelve entero decimal</td></tr><tr class='bug'><th>c</th><td>Devuelve carácter ASCII correspondiente</td></tr><tr class='even'><th>f</th><td>Devuelve decimal (utiliza signo decimal)</td></tr><tr class='bug'><th>s</th><td>Devuelve cadena</td></tr></table>";
echo"<br>";
$edad = '25 años';
printf ('%d', $edad);
/*En  el  ejemplo anterior, mostrara en pantalla el  valor  25  (se  omite  la palabra  años),  ya  que  
al  utilizar  la  función  printf  junto  con  la  instrucción  %d, extraemos de  la variable $edad el valor decimal de esa  variable. */
$numero = 10;
$Cadena = "Santa Marta";
sprintf("Hay %u millones de bicicletas en %s.",$numero,$Cadena);
/*Como se puede apreciar sprintf no devuelve nada */
echo"<hr><br><br>";

echo"<h1>4) STRTOLOWER Y STRTOUPPER</h1>";
echo"<hr><br><br>";//Estas dos funciones tienen la misión de convertir en mayúsculas [strtoupper ( )] o en minúsculas [strtolower ( )] una cadena de texto. 
$var = 'Pepito';
print "Texto en minúsculas:";
echo "<br>";
echo ( strtolower ($var));
/* Esta función mostrará en pantalla el resultado siguiente: pepito. Es decir, nos ha convertido toda la cadena Pepito a minúscula.*/
echo "<br>";
echo "<br>";
print "Texto en mayúsculas:";
echo "<br>";
echo (strtoupper ($var));
echo"<br>";
/* Esta función mostrará en pantalla el resultado siguiente: PEPITO
. Es decir, nos ha convertido toda la cadena de texto Pepito a caracteres en mayúscula.*/
echo"<hr><br><br>";

echo"<h1>5) EREG Y EREGI</h1>";
/*Estas dos funciones son muy interesantes, en especial para emplearlas en formularios,
ya que muchas veces el usuario no completa bien los campos de un formulario al introducir el e-mail,
porque no pone bien el símbolo “@”, aunque se nos pueden ocurrir innidad de ideas a las que aplicarlas */
echo"<hr><br><br>";
$mail = "pepe@dominio.com";
/* En este caso hemos puesto una variable con el contenido pepe@dominio.com,
 para comprobar el funcionamiento de la función eregi ( ),
 pero lo normal es que el contenido de la variable $mail lo obtengamos de un formulario.*/
if  ( mb_eregi  ( '@', $mail)) {print ("Los datos insertados en el formulario son correctos");
/* Si no se encontrase el carácter @ en la variables $mail, se mostraría este mensaje,
 es decir que es correcta la dirección de e-mail.*/} 
else {print ("La dirección de e-mail no es correcta; por favor, vuelva a introducirla");
/* Si no se encuentra el carácter @ en la variable $mail, se mostrará este mensaje
 es decir que la dirección de correo que se ha introducido no es correcta.*/}
 echo"<br>";
echo"<hr><br><br>";
echo"<marquee bgcolor='grey' width='100%' scrolldelay='20' scrollamount='10' direction='right' loop='infinite'>David Leonardo Cucaita Mariño
</marquee>";
?>

