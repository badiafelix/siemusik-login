
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                                <form class="user" method="post" name="kategoriJadwal" action="<?= base_url('admin/jadwalpelayan')?>">
                                    <div class="form-row">
                                    <div class="col-sm-4">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="kategoriPelayan" name="kategoriPelayan" required>
                                                        <option selected="true" disabled="disabled" value = "">Pilih kategori</option>
                                                        <option value="Pemandu">Pemandu</option>
                                                        <option value="Pemusik">Pemusik</option>
                                                        <option value="Operator">Operator</option>
                                                        <option value="All">All</option>
                                                    </select>
                                                <div class="input-group-prepend">
                                                    <button type="submit" id="cariJadwal" class="btn btn-primary" type="button">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    
                                    <!-- <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jadwal Pelayan <?= $kategori;?></h6>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Shift</th>
                                                        <th>Posisi</th>
                                                        <th>Nama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(count($jadwalPelayan) > 0)
                                                    {
                                                        $i = 0;
                                                        foreach ($jadwalPelayan as $content) {
                                                        $i++;
                                                        echo "<tr>";
                                                        echo "<td>$i</td>";
                                                        echo "<td>$content->jwl_tanggal</td>";
                                                        echo "<td>$content->jwl_shift</td>";
                                                        echo "<td>$content->jwl_posisi</td>";
                                                        echo "<td>$content->jwl_nama</td>";
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
            <!-- <script src="<?=base_url('assets/'); ?>js/demo/datatables-demo.js"></script> -->

            
            <script language="JavaScript" type="text/javascript">


            //   $(function() {
            //     $('#cariJadwal').click(function(e) {
            //         e.preventDefault();
            //         var form= $("#kategoriJadwal");
            //         var url = "<?= base_url('admin/jadwalpelayan')?>";
            //         $.ajax({
            //             url : url,
            //             data: form.serialize(),
            //             type: 'POST',
            //             success: function(data){
            //                 window
             
            //             }
            //         });
                        
            //     });
            // });



   
            </script>



           