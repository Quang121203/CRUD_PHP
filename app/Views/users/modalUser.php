<div class="modal fade" id="modalUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width: 80vw; max-width: 80vw;">
    <div class="modal-content d-flex flex-colunm" style="height: auto">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTitle">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="userForm">
          <input id="type" name="type" hidden>
          <input id="idOld" name="idOld" hidden>
          <div id="inputId" class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>
          <div id="inputPass" class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id='save' type="button" class="btn btn-primary" onclick="saveUser()">Save</button>
      </div>
    </div>

  </div>
</div>