
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


  <!-- Total Jadwal Tersisa -->
  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                  Jadwal Tersisa</div>
                              <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Periode 13 Agustus 2021- 20 September 2021</div> -->
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jadwalSisa; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="far fa-calendar-alt fa-2x text-black-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        <!-- Total Kehadiran -->
        <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                          Kehadiran</div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jadwalHadir; ?></div>
                                  </div>
                                  <div class="col-auto">
                                    <i class="far fa-calendar-check fa-2x text-black-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

        <!-- Total Tidak Hadir -->
        <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-danger shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-s font-weight-bold text-danger text-uppercase mb-1">
                                          Tidak Hadir</div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jadwalTidakHadir; ?></div>
                                  </div>
                                  <div class="col-auto">
                                    <i class="far fa-calendar-times fa-2x text-black-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

          <!-- Total Digantikan -->
        <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-warning shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                          Digantikan</div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jadwalDigantikan; ?></div>
                                  </div>
                                  <div class="col-auto">
                                    <i class="far fa-calendar-plus fa-2x text-black-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
  <!-- <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Informasi Absensi</h6>
    <div class="media text-muted pt-3">
 
    <div class="media text-muted pt-3">
 
    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Total Digantikan:</strong> -->
          <!-- <a href="#">Follow</a> -->
        <!-- </div>
        <span class="d-block">5 Kali</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong> -->
          <!-- <a href="#">Follow</a> -->
        <!-- </div>
        <span class="d-block">6 Kali</span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div> -->
</main>

<div class="modal fade" id="absenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Absen Online Sie Musik</h4>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body mx-3 text-center">
                <p class="text-black-50 "><h5 class="font-weight-bold"><?= $user['nickname']; ?></h6></p>
                <p class="text-black-50"><h5>Tanggal : <?= date("d-m-Y"); ?></h6></p>
                <p class="text-black-50"><h5>Shift : <?= $statusAbsen[0]->jwl_shift; ?></h6></p>
                <p class="text-black-50"><h5>Posisi : <?= ucfirst(strtolower($statusAbsen[0]->jwl_posisi)); ?></h6></p>
                <p>Silahkan melakukan absensi online dengan menekan tombol 'ABSEN'</p>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" id="tutupAbsen">ABSEN</button>
                </div>
                </div>
            </div>
            </div>

    

</html>
            <!-- <link href="<?=base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet"> -->
            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?=base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?=base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
            <script src="<?=base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>
            
            <script language="JavaScript" type="text/javascript">
            
            $(function () {
                'use strict'

                $('[data-toggle="offcanvas"]').on('click', function () {
                    $('.offcanvas-collapse').toggleClass('open')
                })
            })

            $(function() {
                    var is_absen = "<?= $user['is_absen']; ?>";
                    if(is_absen == 1)
                    {
                        $('#absenModal').modal({backdrop: 'static', keyboard: false});  //untuk disable seluruh kemungkinan close
                        $('#absenModal').modal('show');
                    }

                    var is_absen = "<?= $user['is_absen']; ?>";
                
                    if(is_absen == 1)
                    {
                        $('#absenModal').modal({backdrop: 'static', keyboard: false});  //untuk disable seluruh kemungkinan close
                        $('#absenModal').modal('show');
                    }
        
                    $("#tutupAbsen").click(function(){
                        
                        //var form= $("#formdaftar");
                        var url = "<?= base_url('user/absensipelayan')?>";
                        var data = 'absensi'
                        console.log(url);
                        $.ajax({
                            url : url,
                            data: data,
                            type: 'POST',
                            success: function(data){
                                var obj = JSON.parse(data);
                                if(obj.status == 'SUCCESS')
                                {
                                    $('#absenModal').modal('hide'); //tutup modal absen
                                    Swal.fire({
                                        title: 'Berhasil Absen!',
                                        text: obj.message,
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        window.location.href = "<?= base_url('user/index')?>";
                                    })
                                }
                                else
                                {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: obj.message,
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    })
                                }        
                            }
                        });
                        
                    }); 

                });
              

            </script>

