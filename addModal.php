<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Agregar Contacto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="agregar.php" method="post">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombrecontacto">
                            </div>
                        </div>
                        <!-- Agrega más campos de formulario si es necesario -->

                        <div class="row form-group">
    <div class="col-sm-2">
        <label class="control-label" for="celular">Celular:</label>
    </div>
    <div class="col-sm-10">
        <input type="tel" class="form-control" name="celular" id="celular" oninput="formatPhoneNumber(this)" placeholder="(123) 456-7890">
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
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <!-- Agrega más campos de formulario si es necesario -->

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Direccion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>
                        <!-- Agrega más campos de formulario si es necesario -->

<div class="modal-footer">
    <button type="botton" class="btn btn-danger" data-dismmiss="modal"><span class=" fa fa-times"></span> Cancelar</button>
    <button type="submit" name="add" class="btn btn-primary" ><span class="fa fa-save"></span> Guardar</button>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
