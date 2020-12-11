<?php

$usuario = $_POST['usuario'];

session_start();


$_SESSION[''] = $usuario;

include_once '../modelo/conexion.php';
    

if(isset($_POST['usuario']) && isset($_POST['clave'])){
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :usuario AND clave = :clave');
    $query->execute(['usuario' => $usuario, 'clave' => $clave]);

    $row = $query->fetch(PDO::FETCH_NUM);
    


    if($row == true){

        $rol = $row[3];
        
        $_SESSION['rol'] = $rol;

        switch($rol){
            case 1:
                header('location: ../vista/homeadmin.php');
            break;

            case 2:
            header('location: ../vista/homeauxiliar.php');

            break;

            default:
        }
    }else{
        // no existe el usuario
        
require '../vista/index.html';
echo('<script>
Swal.fire({
  position: "top-center",
  icon: "error",
  title: "¡Usuario o contraseña incorrecta!",
  showConfirmButton: false,
  timer: 2500
});
</script>');

    }
    

}

$id = $row[0];
$pass = $row[2];
$correo = $row[4];   


$_SESSION['id'] = $id;
$_SESSION['pass'] = $pass;
$_SESSION['correo'] = $correo;

//iniciar sesion en todos los archivos para imprimir nombre 

?>