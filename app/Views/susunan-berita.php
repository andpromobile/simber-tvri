<?= $this->extend("layout/master") ?>

<?= $this->section("content") ?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <h4 class="card-title">Susunan Berita</h4>
                        <p class="card-description">
                            Berita yang sudah terkumpul
                        </p>
                    </div>

                    <div>
                        <a href="<?= base_url() ?>/susunan-berita/form" class="btn btn-success btn-sm btn-rounded">
                            <i class="mdi mdi-plus-box"></i>
                            Buat Susunan
                        </a>
                    </div>
                </div>

                <div>

                </div>

                <div class="filter-status">
                    <select id="filter-status" class="form-control"
                        style="display: inline;width: 200px;margin-left: 25px;">
                        <option value="">Semua</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="hariIni">Hari Ini</option>
                        <option value="req">Re/No Req</option>
                    </select>
                </div>

                <div class="table-responsive">
                    <table id="susunan-berita" class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Program Berita
                                </th>
                                <th>
                                    Tanggal Tayang
                                </th>
                                <th>
                                    Pukul
                                </th>
                                <th>
                                    PDU
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
                                   Program Berita 1 
                                </td>
                                <td>
                                    20 Desember 2022
                                </td>
                                <td>
                                    17.00 Wita
                                </td>
                                <td>
                                    PDU 1
                                </td>
                                
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td class="py-1">
                                    2
                                </td>
                                <td>
                                   Program Berita 2 
                                </td>
                                <td>
                                    23 Desember 2022
                                </td>
                                <td>
                                    13.00 Wita
                                </td>
                                <td>
                                    PDU 2
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
                $('#susunan-berita').DataTable({
                    "aLengthMenu": [
                        [5, 10, 15, -1],
                        [5, 10, 15, "All"]
                    ],
                    "iDisplayLength": 10,
                    "language": {
                        search: ""
                    },

                });

                $("#susunan-berita_filter.dataTables_filter").prepend($("#filter-status"));


                $('#susunan-berita').each(function () {
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