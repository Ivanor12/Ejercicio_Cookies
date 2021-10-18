<?php 

include 'head.php';
//definimos las variables porque si no nos dará un error de que no estan definidas
$usuario="";
$contraseña="";

if(isset($_REQUEST['entrar']))//si has pulsado entrar
{
    if(isset($_REQUEST['guardar_contraseña']))//si has pulsado guardar contraseña
    {
        setcookie('usuario',$_REQUEST['usuario'], time()+ 3600);
        setcookie('contraseña',$_REQUEST['contraseña'], time()+ 3600);
    }

}//fin de entrar
if(isset($_COOKIE['usuario']))
{
    $usuario=$_COOKIE['usuario'];
    $contraseña=$_COOKIE['contraseña'];
}
echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Contraseña:</td>
<td><input type="password" name="contraseña" value="'.$contraseña.'" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_contraseña" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" name="entrar" value="Entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';