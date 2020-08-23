  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('vendor/'); ?>DataTables/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#dataTableRM').DataTable({
        "deferRender": true,
        "stateSave": true,
        "processing": true,
        "serverSide": true,
        "dom": "flrtpi",

        "oLanguage": {
          "sSearch": "Cari  Nomor RM:",
          "sLoadingRecords": "Please wait - loading...",
          "sProcessing": "DataTables is currently busy"

        },
        "order": [],

        "ajax": {
          "url": "<?php echo base_url('pengguna/get_data_user') ?>",
          "type": "POST"
        },


        "columnDefs": [{
          "targets": [0],
          "orderable": false,
          "defaultContent": 'Edit / Delete',
        }, ],



      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <script>
    function confirm_modal(delete_url, title) {
      jQuery('#modaldeleterekammedis').modal('show', {
        backdrop: 'static',
        keyboard: false
      });
      jQuery("#modaldeleterekammedis .grt").text(title);
      document.getElementById('delete_link_m_n').setAttribute("href", delete_url);
      document.getElementById('delete_link_m_n').focus();
    }
  </script>
  <script>
    function idpasien() {
      var a = document.getElementById('idpasien').value;
      var link = '<?= base_url("pengguna/auth_edit_rekammedis/") ?>'
      document.getElementById('disini').setAttribute("href", link + a);
    }
  </script>
  <!--  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    
    $("#kabupaten").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#kecamatan").hide(); // Sembunyikan dulu combobox kota nya
      $("#kelurahan").hide(); // Sembunyikan dulu combobox kota nya
      // $("#loading").show(); // Tampilkan loadingnya

      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("pengguna/listKota"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_kabupaten : $("#kabupaten").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
        	if(e && e.overrideMimeType) {
        		e.overrideMimeType("application/json;charset=UTF-8");
        	}
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // $("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#kecamatan").html(response.list_kota).show();
      },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
      }
	  });
	  });

    $("#kecamatan").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#kelurahan").hide(); // Sembunyikan dulu combobox kota nya
      // $("#loading").show(); // Tampilkan loadingnya

      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("pengguna/listKecamatan"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_kecamatan : $("#kecamatan").val(), id_kabupaten : $("#kabupaten").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
        	if(e && e.overrideMimeType) {
        		e.overrideMimeType("application/json;charset=UTF-8");
        	}
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // $("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#kelurahan").html(response.list_kecamatan).show();
      },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
      }
	  });
	  });
	});
</script> -->

  </body>

  </html>