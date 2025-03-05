<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createLabel">Adicionar nova nota</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="create-form" action="config/process.php" method="POST">
              <input type="hidden" name="type" value="create">
              <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" id="title" name="title" require>
              </div>
              <div class="form-group">
                  <label for="observations">Descrição</label>
                  <textarea type="text" name="observations" id="observations" row="5"></textarea>
              </div>
              <button type="submit">Salvar</button>
          </form>
        </div>
      </div>
    </div>
</div>