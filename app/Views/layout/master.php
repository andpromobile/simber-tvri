<!-- Haeder -->
<?= $this->include('layout/header') ?>
<!--/Haeder -->

<body>
  <div class="container-scroller d-flex">
     <!-- Main Sidebar Container -->
     <?= $this->include('layout/sidebar') ?>

    <div class="container-fluid page-body-wrapper">
       <!-- Navbar -->
       <?= $this->include('layout/navbar') ?>
        <!-- /.navbar -->
      <div class="main-panel">
        <div class="content-wrapper">

        <!-- Area for dynamic content <div class='card'> -->
        <?= $this->renderSection("content") ?>
                            <!-- /Area for dynamic content -->
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    <!-- Global Script -->
    <?= $this->include('layout/globalscript') ?>
    <!--/Global Script -->

    <!-- PageScript-->
    <?= $this->renderSection("pageScript") ?>
    <!-- /PageScript-->


  
  
</body>

</html>