<?php

$modal_name = "";
if(isset($_SESSION['status'])){
  if($_SESSION['status'] == 'success'){
    $modal_name = "successModal";
  }else if($_SESSION['status'] == 'error'){
    $modal_name = "errorModal";
  }
}
?>
<script>
  document.addEventListener("DOMContentLoaded",()=>{
    var modalObject = document.getElementById('<?php echo $modal_name ?>');
    var modal = new bootstrap.Modal(modalObject);
    modal.show();
  })
</script>
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="successModalLabel">Success!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Your response is recorded.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="errorModalLabel">Erro!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        There was an issue recording your response. Please try again.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
  session_destroy();
?>