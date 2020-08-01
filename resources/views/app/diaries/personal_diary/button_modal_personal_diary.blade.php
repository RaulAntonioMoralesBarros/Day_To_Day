{{-- button modal --}}
<div class="color-switcher-toggle animated pulse infinite" data-toggle="modal" data-target="#menu_book">
    <i class="material-icons">menu_book</i>
</div>
{{-- /button modal --}}

{{-- windows modal --}}
<div class="modal fade" id="menu_book" tabindex="-1" role="dialog" aria-labelledby="modal_menu_book" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crea un nuevo diario personal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Ingresa un titulo a tu diario:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
                <br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
{{-- /windows modal --}}
