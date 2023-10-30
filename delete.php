<?php
session_start();
include_once("conexion.php");

if (isset($_GET["id"])) {
    $database = new ConectarDB();
    $db = $database->open();

    try {
        $id = $_GET['id'];

        $sql = "DELETE FROM personas WHERE IdPersona = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Reiniciar el valor de auto incremento a 0 en la columna IdPersona
      //  $resetAutoIncrement = "ALTER TABLE personas AUTO_INCREMENT = 0";
        //$db->exec($resetAutoIncrement);

        $message = 'Contacto eliminado correctamente';
    } catch (PDOException $e) {
        $message = 'Algo salió mal. No se pudo eliminar el contacto: ' . $e->getMessage();
    }

    $database->close();
} else {
    $message = 'Seleccione un contacto para eliminar';
}

$_SESSION['message'] = $message;
header('Location: index.php');
?>
