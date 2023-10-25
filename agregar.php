<?php
session_start(); // Asegúrate de iniciar la sesión antes de usar $_SESSION.

include_once("conexion.php");

if (isset($_POST["add"])) {
    $database = new ConectarDB(); 
    $db = $database->open();

    try {
        $stmt = $db->prepare("INSERT INTO personas (Nombre, Telefono, Correo, Direccion) VALUES (:nombrecontacto, :celular, :email, :direccion)"); // Corregidos los puntos a comas.

        $message = $stmt->execute(array(
            ':nombrecontacto' => $_POST['nombrecontacto'],
            ':celular' => $_POST['celular'], 
            ':email' => $_POST['email'],     
            ':direccion' => $_POST['direccion'] 
        )) ? 'Contacto agregado correctamente' : 'Algo salió mal. No se pudo agregar el contacto';
    } catch (PDOException $e) {
        $message = $e->getMessage();
    }

    $database->close();
} else {
    $message = 'Rellena el formulario';
}

$_SESSION['message'] = $message;
header('Location: index.php'); // Corregido "header(location: index.php);".
?>
