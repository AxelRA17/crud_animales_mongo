<?php session_start();

    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "nombre_m" => $_POST['nombre_m'],
        "edad" => $_POST['edad'],
        "especie" => $_POST['especie'],
        "raza" => $_POST['raza'],
        "nombre_d" => $_POST['nombre_d']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php"); 
    } else {
        print_r($respuesta);
    }
?>