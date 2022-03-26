
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
                                                        <th>No Nip</th>
                                                        <th>Gender</th>
                                                        <th>Email</th>
                                                        <th>Sektor</th>
                                                        <th>Posisi Melayani</th>
                                                        <th>Instrumen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(count($InformasiAll) > 0)
                                                    {
                                                        $i = 0;
                                                        foreach ($InformasiAll as $content) {
                                                            $i++;
                                                            echo "<tr>";
                                                            echo "<td>$i</td>";
                                                            echo "<td>$content->usr_name</td>";
                                                            echo "<td>$content->usr_nip</td>";
                                                            echo "<td>$content->pln_gender</td>";
                                                            echo "<td>$content->usr_email</td>";
                                                            echo "<td>$content->pln_sektor</td>";
                                                            echo "<td>$content->pln_posisi_pelayan</td>";
                                                            echo "<td>$content->pln_instrumen</td>";
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



           