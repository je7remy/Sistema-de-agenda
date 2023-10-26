<?php
session_start();
include_once("conexion.php");

if (isset($_POST["edit"])) {
    $database = new ConectarDB(); 
    $db = $database->open();

    try {
        $id = $_GET["id"];
        $nombrec = $_POST["nombrecontacto"];
        $telefonoc = $_POST["celular"];
        $correoc = $_POST["email"];
        $direccionc = $_POST["direccion"];

        $sql = "UPDATE personas SET 
        Nombre = :nombrec,
        Telefono = :telefonoc,
        Correo = :correoc,
        Direccion = :direccionc
        WHERE IdPersona = :id";

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':nombrec', $nombrec);
        $stmt->bindParam(':telefonoc', $telefonoc);
        $stmt->bindParam(':correoc', $correoc);
        $stmt->bindParam(':direccionc', $direccionc);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $message = 'Los datos se actualizaron correctamente';
    } catch (PDOException $e) {
        $message = 'Algo salió mal. No se pudo actualizar el contacto: ' . $e->getMessage();
    }

    $database->close();
} else {
    $message = 'Rellena el formulario';
}

$_SESSION['message'] = $message;
header('Location: index.php');
?>
