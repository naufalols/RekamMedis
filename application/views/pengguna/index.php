<!-- Begin Page Content -->
<div class="container-fluid">


  <div class="form-row">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel data Rekam Medis Kolbu</h1> &nbsp;

    <?= $this->session->flashdata('pesan_registrasi'); ?>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="dataTableRM" width="100%" cellspacing="1">
          <thead>
            <tr>
              <th>ID</th>
              <th>RM</th>
              <th>Nama</th>
              <th>Pekerjaan</th>
              <th>Dusun</th>
              <th>Kelurahan</th>
              <!-- <th>Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-transform: capitalize;"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <!-- <td></td> -->
              <!-- <td align="center">
                      <form method="post">
                        <input type="hidden" name="idpasien" value="">
                        <input type="hidden" name="kabupaten" value="">
                        <div class="">
                          <div class="btn-group btn-group-sm">
                            <div data-toggle="tooltip" data-placement="left" title="Sunting!">
                              <button type="submit" formaction="<?= base_url('pengguna/editRekamMedis'); ?>" class="btn btn-circle btn-primary btn-sm">
                                <i class="fas fa-pen"></i>
                              </button>
                            </div>
                            <div data-toggle="tooltip" data-placement="left" title="Hapus!">
                              <button type="button" formaction="" class="btn btn-circle btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-trash"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Rekam Medis Kolbu 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>