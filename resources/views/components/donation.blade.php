<!-- DONATE MODAL -->
<div class="modal fade" id="donateModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content p-4" style="border-radius: 15px;">

      <!-- CLOSE BUTTON -->
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"></button>

      <!-- MODAL BODY -->
      <div class="modal-body text-center">

        <!-- TITLE -->
        <h4 class="fw-bold mb-1 main-header">Scan and Donate</h4>
        <p class="text-muted mb-4">Make a secure contribution to support Redwood Lacrosse programs.</p>

        <!-- QR CODE -->
        <img src="{{ url('public/qr-images/qr.jpeg') }}" class="img-fluid mb-4" style="max-width: 410px;">


        

      </div>

    </div>
  </div>
</div>

<style>
  #donateModal .modal-content {
    background: #fff;
    padding: 40px 30px;
  }
  #donateModal .btn-close {
    font-size: 20px;
  }
  #donateModal h4 {
    font-weight: 700;
  }
</style>
