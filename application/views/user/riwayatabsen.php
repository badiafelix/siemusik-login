
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">RIWAYAT ABSENSI <?= " " .$user['usr_name']; ?></h6>
                                    </div>
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
                                                    </tr>
                                                </thead>
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
                                                            echo "<td>$content->jwl_shift</td>";
                                                            echo "<td>$content->jwl_tanggal</td>";
                                                            echo "<td>$content->jwl_is_attend</td>";
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



           