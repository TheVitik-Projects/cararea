<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmId"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Повідомлення</p>
        <input type="text" class="form-control" id="confirmMessage">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" style="margin:auto" onclick="confirm()">Підтвердити</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rejectId"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Повідомлення</p>
        <input type="text" class="form-control" id="rejectMessage">
        <span id="alert"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" style="margin:auto" onclick="reject()">Відхилити</button>
      </div>
    </div>
  </div>
</div>