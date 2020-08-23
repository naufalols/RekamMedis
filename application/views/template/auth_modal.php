<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keluar??</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Logout" di bawah jika anda ingin keluar.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- (Delete Modal)-->
<div class="modal fade" id="modaldeleterekammedis" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">

      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Anda yakin menghapus data <span class="grt"></span> ?</h4>

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <span id="preloader-delete"></span>
        </br>
        <a class="btn btn-danger" id="delete_link_m_n" href="">Delete</a>
        <button type="button" class="btn btn-info" data-dismiss="modal" id="delete_cancel_link">Cancel</button>

      </div>
    </div>
  </div>
</div>

<!-- edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">masukkan nomor ID pasien </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <input id="idpasien" class="form-control" type="number" min="1" value="" oninput="idpasien()">
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a id="disini" class="btn btn-primary" href="#">Sunting</a>
      </div>
    </div>
  </div>
</div>