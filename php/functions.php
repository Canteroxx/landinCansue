<?php
if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
            case 'acceso_user';
            acceso_user();
            break;   

            case 'insertar_user';
            insertar_user();
            break;

		}

	}
    
    function acceso_user(){
  
        extract($_POST);
        require_once ("db.php");
        $nombre= $conexion->real_escape_string($_POST['nombre']);
        $password= $conexion->real_escape_string($_POST['password']);
        session_start();
        $_SESSION['nombre']=$nombre;
        //$_SESSION['rol_id']=$rol_id;
    
        
        $consulta="SELECT*FROM user where nombre='$nombre' and password='$password'";
        $resultado=mysqli_query($conexion,$consulta);
        $filas=mysqli_fetch_array($resultado);
        
    
        if(isset($filas)){
            
            header('Location: ../index.html');
    
    
    
    } else{
            
           
        echo "<script language='JavaScript'>
        alert('Usuario o Contraseña Incorrecta');
        location.assign('../pages/sesion/login.php');
        </script>";
            session_destroy();
        }
    }

function insertar_user(){

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta="INSERT INTO user (nombre, correo, password)
    VALUES ('$nombre', '$correo', '$password' );" ;
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado){
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../pages/sesion/login.php');
        </script>";
   } else{
         echo "<script language='JavaScript'>
         alert('Uy no! ya valio hablale al ing :v');
         location.assign('../pages/sesion/login.php');
         </script>";
}

}

?>

