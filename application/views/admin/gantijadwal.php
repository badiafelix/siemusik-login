
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                                    <!-- <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jadwal pelayanan <?= " " .$user['usr_name']; ?></h6>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Shift</th>
                                                        <th>Posisi</th>
                                                        <th>Nama</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Posisi</th>
                                                        <th>Shift</th>
                                                        <th>Nama</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>        
                                                <?php
                                                    
                                                    $idloop = 0;
                                                    foreach ($jadwalLengkap as $content) {
                                                        $idloop++;
                                                        $value = $content->jwl_nama . "/" . $content->jwl_tanggal . "/" . $content->jwl_shift . "/" . $content->jwl_nip_pelayan . "/" . $content->jwl_posisi;
                                                        echo "<tr>";
                                                        echo "<td>$content->jwl_tanggal</td>";
                                                        echo "<td>$content->jwl_shift</td>";
                                                        echo "<td>$content->jwl_posisi</td>";
                                                        echo "<td>$content->jwl_nama</td>";
                                                        echo "<td><button type='button' id='button$idloop'class='btn btn-primary btn-sm' value= '$value'>Ganti</button></td>";
                                                        echo "</tr>";
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

            <div class="modal fade" id="modalPengganti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Pergantian Pelayan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                        <input type="hidden" name = "hiddenvalue" id="hiddenvalue" value=""/>
                        <label for="posisi">Pilih Pengganti</label>
                        <select class="custom-select mr-sm-2" id="namapengganti" name="namapengganti" required>
                            <option selected="true" disabled="disabled" value = "">Pilih Pengganti</option>
                            <!-- <?php               
                                foreach ($daftarpemandu as $content) {
                                    echo "<option value='$content->usr_name'>$content->usr_name</option>";
                                }
                            ?> -->
                            
                        </select>
                    </div>
                    <div class="md-form mb-2">
                        <label for="posisi">Alasan Digantikan</label>
                        <select class="custom-select mr-sm-2" id="alasandiganti" name="alasandiganti" required>
                            <option selected="true" disabled="disabled" value = "">Pilih Alasan</option>
                            <option value="sakit">Sakit</option>
                            <option value="berhalangan">Berhalangan</option>
                            <option value="lainnya">lainnya</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" id="submitGantiPemandu" onclick="submitGantiPemandu()">Submit</button>
                </div>
                </div>
            </div>
            </div>

            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <!-- <script src="<?=base_url('assets/'); ?>js/demo/datatables-demo.js"></script> -->
            <script language="JavaScript" type="text/javascript">

            $(function() {

                for(let i = 1; i <= <?= $jdwldatalength; ?>; i++) {  
                    $('#button' + i).click( function(){
                        var id = '#button' + i;
                        var str = $(this).attr("value").toString();
                        var split = str.split("/");

                        var nama = split[0];
                        // var tgl = split[1];
                        // var shift = split[2];
                        // var nip = split[3];
                        var posisi = split[4];
                        if(posisi == 'PEMANDU')
                        {
                            $('#namapengganti').find('option').remove().end()
                                .append('<option selected="true" disabled="disabled" value = "">Pilih Pengganti</option>')
                                .val('')
                            ;
                            var content ="<?php foreach ($daftarpemandu as $content) { 
                              $nama = str_replace('.',' ',$content->usr_username) ; 
                              $value = $nama . "/" . $content->usr_nip;
                              echo "<option value='$value'>$nama</option>";}?>";
                            $('#namapengganti').append(content);
                            $(".modal-body #hiddenvalue").val(str); //kirim value ke hidden form bootstrap modal
                            $('#modalPengganti').modal('show');
                        }
                        else if(posisi == 'PEMUSIK')
                        {
                            $('#namapengganti').find('option').remove().end()
                                .append('<option selected="true" disabled="disabled" value = "">Pilih Pengganti</option>')
                                .val('')
                            ;
                            $('#namapengganti').append("");
                            var content ="<?php foreach ($daftarpemusik as $content) { 
                                $nama = str_replace('.',' ',$content->usr_username); 
                                $value = $nama . "/" . $content->usr_nip;
                                echo "<option value='$value'>$nama</option>";}?>";
                            $('#namapengganti').append(content);
                            $(".modal-body #hiddenvalue").val(str); //kirim value ke hidden form bootstrap modal
                            $('#modalPengganti').modal('show');
                        }
                        else
                        {
                            $('#namapengganti').find('option').remove().end()
                                .append('<option selected="true" disabled="disabled" value = "">Pilih Pengganti</option>')
                                .val('')
                            ;
                            $('#namapengganti').append("");
                            var content ="<?php foreach ($daftaroperator as $content) { 
                                $nama = str_replace('.',' ',$content->usr_username); 
                                $value = $nama . "/" . $content->usr_nip;
                                echo "<option value='$value'>$nama</option>";}?>";
                            $('#namapengganti').append(content);
                            $(".modal-body #hiddenvalue").val(str); //kirim value ke hidden form bootstrap modal
                            $('#modalPengganti').modal('show');
                        
                        }

                    });
                }
            });

            function submitGantiPemandu()
            {
                var value = $("#hiddenvalue").val().toString();
                var split = value.split("/");

                var pengganti = $("#namapengganti").val();
                var alasan_diganti = $("#alasandiganti").val();

                var nama = split[0];
                var tgl = split[1];
                var shift = split[2];
                var nip = split[3];
                var posisi = split[4];

                console.log(nama,tgl,shift,nip,posisi,pengganti,alasan_diganti);

                //event.preventDefault();
                var url = "<?= base_url('Admin/insertgantijadwal')?>";
                // var data "DIGANTIKAN";
                $.ajax({
                    url : url,
                    method: "POST",
                    dataType : "json",
                    data: { 'nama' : nama, 
                            'tgl' : tgl,
                            'shift' : shift,
                            'nip' : nip,
                            'posisi' : posisi,
                            'pengganti' : pengganti,
                            'alasan_diganti' : alasan_diganti
                         },
                    success: function(data){
                        // console.log(data);
                        // var obj = JSON.parse(data);
                        // var obj = JSON.parse(data).toString();
                        // console.log(obj);
                        if(data.status == "SUCCESS")
                        {
                            //console.log("bisa loh");
                            $('#modalPengganti').modal('hide'); //tutup modal absen
                            Swal.fire({
                                title: 'Success!',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                window.location.href = "<?= base_url('admin/gantijadwal')?>";
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
            }

  
            </script>



           