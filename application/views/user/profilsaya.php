
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- Tambahan Card -->
                    <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="<?=base_url('assets/picture/profile.png'); ?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user[0]->usr_name; ?></h5>
                            <!-- <p class="card-text">TTL : <?= $user[0]->pln_dob; ?></p>
                            <p class="card-text">Email : <?= $user[0]->usr_email; ?></p>
                            <p class="card-text">Posisi : <?= $user[0]->pln_posisi_pelayan; ?></p>
                            <p class="card-text">Jenis : <?= $user[0]->pln_instrumen; ?></p> -->
                            <table class="card-table table">
                                <tbody>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><?= $user[0]->pln_dob; ?></td>
              
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td><?= $user[0]->usr_email; ?></td>
                       
                                </tr>
                                <tr>
                                    <td>Posisi Pelayan</td>
                                    <td><?= $user[0]->pln_posisi_pelayan; ?></td>
                               
                                </tr>
                                <tr>
                                    <td>Instrumen</td>
                                    <td><?= $user[0]->pln_instrumen; ?></td>
                         
                                </tr>
                                <!-- <tr>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
                                    title: 'Success!',
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

           