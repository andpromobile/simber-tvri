<?= $this->extend("layout/master") ?>

<?= $this->section("content") ?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Berita Baru</h4>
                <p class="card-description">
                    Menambahkan Berita
                </p>

                <form class="forms-sample">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="Lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="Lokasi" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="Waktu">Waktu</label>
                        <input type="text" class="form-control" id="Waktu" placeholder="Waktu">
                    </div>

                    <div class="form-group">
                        <label>Req</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="req" id="optionsRadios1" value="Req">
                            Default
                          <i class="input-helper"></i></label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="req" id="optionsRadios2" value="Inisiatif">
                            Selected
                          <i class="input-helper"></i></label>
                        </div>
                        
                      </div>

                      <div class="form-group">
                        <label for="lead">Lead</label>
                        <textarea class="form-control" id="lead" rows="4"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="bodi">Body</label>
                        <textarea class="form-control" id="bodi" rows="8"></textarea>
                      </div>



                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= base_url() ?>/keranjang-berita" class="btn btn-light">Cancel</a>
                </form>


            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>


<!-- page script -->
<?= $this->section("pageScript") ?>
<!-- Custom js for this page-->
<script src="<?= base_url();?>/assets/js/quill.js"></script>

<script>
    var quill = new Quill('#bodi', {
      theme: 'snow'
    });
  </script>

<!-- End custom js for this page-->

<?= $this->endSection() ?>