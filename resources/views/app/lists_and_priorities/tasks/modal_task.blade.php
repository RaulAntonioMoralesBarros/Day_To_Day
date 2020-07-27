<div
        class="modal fade"
        id="tarea"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Asignación e Información
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                      
              <label class="my-1 mr-2" for="notas">Nota</label>
              <textarea
                class="form-control"
                id="notas"
                rows="3"
              ></textarea>

              <label for="userLocation">Recordatorio</label>

              <input id="input" width="270" />
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Cerrar
              </button>
              <button type="button" class="btn btn-primary">
                Guardar
              </button>
            </div>
          </div>
        </div>
      </div>