                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <!-- <div class="row"> -->

       
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jadwal Tersisa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jadwalSisa; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-calendar-alt fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
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

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
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


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
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
                    </div>

                    
                      <!-- Content Row -->

                      <!-- <div class="row"> -->


</div>



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


            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script language="JavaScript" type="text/javascript">

            $(function() {
                //$('#absenModal').modal({backdrop: 'static', keyboard: false})  //untuk disable seluruh kemungkinan close
                var is_absen = "<?= $user['is_absen']; ?>";
                //window.alert(is_absen);
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