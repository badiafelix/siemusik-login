
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                                    <!-- <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">RIWAYAT ABSENSI <?= " " .$user['usr_name']; ?></h6>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Posisi</th>
                                                        <th>Shift</th>
                                                        <th>Tanggal</th>
                                                        <th>Status Absen</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(count($jadwalAll) > 0)
                                                    {
                                                        $i = 0;
                                                        foreach ($jadwalAll as $content) {
                                                            $i++;
                                                            $value = $content->jwl_nama . "/" . $content->jwl_tanggal . "/" . $content->jwl_shift . "/" . $content->jwl_nip_pelayan . "/" . $content->jwl_posisi;
                                                            echo "<tr>";
                                                            echo "<td>$i</td>";
                                                            echo "<td>$content->jwl_nama</td>";
                                                            echo "<td>$content->jwl_posisi</td>";
                                                            echo "<td>$content->jwl_shift</td>";
                                                            echo "<td>$content->jwl_tanggal</td>";
                                                            echo "<td>BELUM ABSEN</td>";
                                                            echo "<td><button type='button' id='button$i'class='btn btn-primary btn-sm' value= '$value'>Absenkan</button></td>";
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
            <!-- End of Main Content -->


            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?=base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>
            <script language="JavaScript" type="text/javascript">

            $(function() {

                for(let i = 1; i <= <?= $jdwldatalength; ?>; i++) {  
                    $('#button' + i).click( function(){
                        //window.alert("bisa");
                        var id = '#button' + i;
                        var str = $(this).attr("value").toString();
                        var split = str.split("/");
                        var nama = split[0];
                        var tgl = split[1];
                        var shift = split[2];
                        var nip = split[3];
                        var posisi = split[4];

                        var url = "<?= base_url('Admin/updatelupaabsen')?>";
                        $.ajax({
                            url : url,
                            method: "POST",
                            dataType : "json",
                            data: { 'nama' : nama, 
                                    'tgl' : tgl,
                                    'shift' : shift,
                                    'nip' : nip,
                                    'posisi' : posisi
                                },
                            success: function(data){
                                //console.log(data);
                                if(data.status == "SUCCESS")
                                {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: data.message,
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        window.location.href = "<?= base_url('admin/lupaabsen')?>";
                                    })
                                }
                                else
                                {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: data.message,
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    })
                                }  
                            }
                        });


                    });
                }
            });
  
            </script>




           