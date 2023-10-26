<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jeremy De La Cruz">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Agenda de contactos personal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
   
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Impartiendo Conocimiento</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Redes Sociales</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Whatsapp</a>
              <a class="dropdown-item" href="#">Instagram</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

    <div class="container">
    <h1 class="page-header text-center">Agenda de contactos Personal</h1>
    <div class="row">

    <div class="col-sm-12">
      <a href="#addNew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span > Nuevo</a>
      
      <?php
session_start();
if (isset($_SESSION["message"])) {
?>
  
  <div class="alert alert-success alert-dismissible" style="margin-top: 20px;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $_SESSION["message"]; ?>
  </div>
<?php
  unset($_SESSION["message"]);
}
?>






    <table class="table table-bordered table-striped" style="margin-top: 20px;">
      <thead>
          <th>ID</th>
          <th>Nombre de Contacto</th>
          <th>Celular</th>
          <th>Correo</th>
          <th>Direccion</th>
          <th>Acciones</th>
      </thead>
      <tbody>
        <?php 
        
        include_once("conexion.php");
        $database = new ConectarDB();
        $db = $database->open();   
        try {
          $sql = 'SELECT * FROM personas';
          foreach ($db->query($sql) as $row) {
            ?>
            <tr>
              <td><?php echo $row['IdPersona']; ?></td>
              <td><?php echo $row['Nombre']; ?></td>
              <td><?php echo $row['Telefono']; ?></td>
              <td><?php echo $row['Correo']; ?></td>
              <td><?php echo $row['Direccion']; ?></td>
              <td><a href="#edit_<?php echo $row['IdPersona']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"> </span> Editar</a>
              <a href="#delete_<?php echo $row['IdPersona']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fas fa-trash-alt"></span> Eliminar</a></td>
            <?php
    include('EditarEliminarModal.php');


?>
            </tr>
            <?php 
            
          }
        } catch (PDOException $e) {
          
          echo "Hay un problema con la conexión: " . $e->getMessage();
        }
        $database->close();

        ?>
      </tbody>
    </table>
    </div>
    </div>

<?php include("addModal.php"); ?>

</div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script> 
  </body>
</html>
