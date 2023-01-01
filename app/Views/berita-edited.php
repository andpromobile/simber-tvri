<?= $this->extend("layout/master") ?>

<?= $this->section("content") ?>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

            <h4 class="card-title">Berita Edited</h4>
            <p class="card-description">
              Berita yang sudah diedit
            </p>

        <div>

        </div>

        <div class="filter-status">
          <select id="filter-status" class="form-control" style="display: inline;width: 200px;margin-left: 25px;">
            <option value="">Semua</option>
            <option value="terbaru">Terbaru</option>
            <option value="hariIni">Hari Ini</option>
            <option value="req">Re/No Req</option>
          </select>
        </div>

        <div class="table-responsive">
          <table id="berita-edited" class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Tanggal Masuk
                </th>
                <th>
                  Judul
                </th>
                <th>
                  Reporter
                </th>
                <th>
                  Editor
                </th>
                <th>
                    Tanggal Edit
                  </th>
                <th>
                  Req/No Req
                </th>
                <th>
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  1
                </td>
                <td>
                  20 Desember 2022
                </td>
                <td>
                  Penangkapan Oknum Polisi
                </td>
                <td>
                  Sarah Sechan
                </td>
                <td>
                  Ilham Jaya
                </td>
                <td>
                    21 Desember 2022
                  </td>
                <td>
                  Req
                </td>
                <td>

                </td>
              </tr>

              <tr>
                <td class="py-1">
                  2
                </td>
                <td>
                  19 Desember 2022
                </td>
                <td>
                  Mahasiswa berprestasi
                </td>
                <td>
                  Aulia Sarah
                </td>
                <td>
                    Ilham Jaya
                  </td>
                  <td>
                      21 Desember 2022
                    </td>
                <td>
                  No Req
                </td>
                <td>

                </td>
              </tr>


            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>



  <?= $this->endSection() ?>


  <!-- page script -->
  <?= $this->section("pageScript") ?>
  <!-- Custom js for this page-->
  <!-- plugin js for this page -->
  <script src="<?= base_url();?>/assets/js/jquery.dataTables.js"></script>
  <script src="<?= base_url();?>/assets/js/dataTables.bootstrap4.js"></script>

  <script>
    (function ($) {
      'use strict';
      $(function () {
        $('#berita-edited').DataTable({
          "aLengthMenu": [
            [5, 10, 15, -1],
            [5, 10, 15, "All"]
          ],
          "iDisplayLength": 10,
          "language": {
            search: ""
          },

        });

        $("#berita-edited_filter.dataTables_filter").prepend($("#filter-status"));


        $('#berita-edited').each(function () {
          var datatable = $(this);
          // SEARCH - Add the placeholder for Search and Turn this into in-line form control
          var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
          search_input.attr('placeholder', 'Search');
          search_input.removeClass('form-control-sm');
          // LENGTH - Inline-Form control
          var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
          length_sel.removeClass('form-control-sm');
        });
      });
    })(jQuery);
  </script>

  <!-- End plugin js for this page -->
  <!-- End custom js for this page-->

  <?= $this->endSection() ?>