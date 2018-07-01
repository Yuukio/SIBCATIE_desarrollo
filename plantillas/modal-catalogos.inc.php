<!-- Modal REINO 
<div class="modal fade" id="modalReino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 600px; margin: 30px auto">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="defaultModalLabel">Agregar nuevo Reino</h4>
            </div>
            <div class="modal-body">
                <label for="firstName">Nombre del Reino</label>
                <input type="text" class="form-control" id="nombre_reino" placeholder="" value="" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="guardar-reino">AGREGAR</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" aria-label="Close">CANCELAR</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       $('#tabla_reino').load('mantenimientos-catalogos.inc.php');
    });

</script>

<script type="text/javascript">
    $(document).ready(function()){
        $('#guardar-reino').click(function(){
            nombre_reino = $('#nombre_reino').val();
            agregar_reino(nombre_reino);
        });
    }
</script>-->
