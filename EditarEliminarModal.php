<div class="modal fade" id="edit_<?php echo $row['IdPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Editar Contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="editar.php?id=<?php echo $row['IdPersona']; ?>" >
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="nombrecontacto" value="<?php echo $row['Nombre']; ?>">
                            </div>
                        </div>
                        <!-- Agrega más campos de formulario si es necesario -->

                        <div class="row form-group">
    <div class="col-sm-2">
        <label class="control-label" for="celular">Celular:</label>
    </div>
    <div class="col-sm-10">
        <input type="tel" class="form-control" required name="celular" id="celular" oninput="formatPhoneNumber(this)" placeholder="(123) 456-7890" 
        value="<?php echo $row['Telefono']; ?>">
    </div>
</div>

<script>
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, ''); // Elimina todos los caracteres no numéricos.

    if (value.length > 0) {
        if (value.length <= 3) {
            value = `(${value}`;
        } else if (value.length <= 6) {
            value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
        } else {
            value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
    }

    input.value = value;
}
</script>


                        <!-- Agrega más campos de formulario si es necesario -->

                        <div class="row form-group">
    <div class="col-sm-2">
        <label class="control-label">Email:</label>
    </div>
    <div class="col-sm-10">
        <input type="email" class="form-control"  name="email" pattern=".+@gmail\.com" required  value="<?php echo $row['Correo']; ?>">
        <small>Ejemplo: tunombre@gmail.com</small>
    </div>
</div>

                        <!-- Agrega más campos de formulario si es necesario -->

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Direccion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" required name="direccion" value="<?php echo $row['Direccion']; ?>">
                            </div>
                        </div>
                        <!-- Agrega más campos de formulario si es necesario -->

<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">
    <span class="fa fa-times" aria-hidden="true"></span> Cancelar
</button>

    <button type="submit" name="edit" class="btn btn-success" ><span class="fa fa-check"></span> Actualizar</button>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Eliminar -->

<div class="modal fade" id="delete_<?php echo $row['IdPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Borrar Contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 
            <p class="text-center"> ¿Estas seguro de borrar los datos de?     </p>
            <h2 class="text-center"> <?php echo $row['Nombre']; ?></h2>


                <!-- Contenido del cuerpo del modal -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" >
                    <span class="fa fa-times" aria-hidden="true"></span> Cancelar
                </button>
                <a href="delete.php?id=<?php echo $row['IdPersona']; ?>" class="btn btn-danger"><span class="fa fa-trash"> 
                </span>  Si</a>
                <!-- Agregar aquí el formulario o contenido adicional si es necesario -->
               
            </div>
        </div>
    </div>
</div>

