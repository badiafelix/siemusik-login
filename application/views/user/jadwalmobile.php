
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">WELCOME<?= " " . $user['nickname']; ?></a>

  </nav>
</div>

<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
    <!-- <img class="mr-3" src="/docs/4.4/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48"> -->
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100"><?= $title;?></h6>
      <!-- <small>Since 2011</small> -->
    </div>
  </div>

  
<!-- 
  <div class="my-3 p-3 bg-white rounded shadow-sm"> -->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                                    <!-- <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">JADWAL PELAYANAN <?= " " .$user['nickname']; ?></h6>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Posisi</th>
                                                        <th>Team</th>
                                                        <th>Shift</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <!-- <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Posisi</th>
                                                        <th>Partner</th>
                                                        <th>Shift</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </tfoot> -->
                                                <tbody>
                                                <?php
                                                    if(count($jadwalUser) > 0)
                                                    {
                                                        $i = 0;
                                                        foreach ($jadwalUser as $content) {
                                                        $i++;
                                                        echo "<tr>";
                                                        echo "<td>$i</td>";
                                                        echo "<td>$content->jwl_nama</td>";
                                                        echo "<td>$content->jwl_posisi</td>";
                                                        echo "<td>$content->jwl_team</td>";
                                                        echo "<td>$content->jwl_shift</td>";
                                                        echo "<td>$content->jwl_tanggal</td>";
                                                        echo "</tr>";
                                                        }
                                                    }
                      
                                                ?> 
                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                <!-- /.container-fluid -->

            </div>
  <!-- </div> -->

  <!-- <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">All suggestions</a>
    </small> -->
  </div>
</main>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

<!-- Page level plugins -->
<script src="<?=base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<!-- Untuk datatables unduh pdf dsb -->
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/jszip.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/pdfmake.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/vfs_fonts.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.html5.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.print.min.js"></script>
<script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.colVis.min.js"></script>

<script>
    $(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})
</script>
