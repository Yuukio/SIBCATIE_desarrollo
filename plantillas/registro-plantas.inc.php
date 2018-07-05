

<!-- Modal REINO -->
<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 600px; margin: 30px auto">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="defaultModalLabel">Agregar nuevo Reino</h4>
            </div>

            <form id="fmr-reino">
                <div class="modal-body">
                    <label for="nombre-reino">Nombre del Reino</label>
                    <input type="text" class="form-control" name="nombre-reino" id="nombre-reino" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="guardar-reino">AGREGAR</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                </div>
            </form>
            <div id="mensaje-reino"></div>

        </div>
    </div>
</div>