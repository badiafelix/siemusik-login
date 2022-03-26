
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                                    <div class="card-header py-3">
                                    <form method="post" id ="exportExcel" enctype="multipart/form-data">
                        <div class="form-row">
                            <!-- <div class="form-group col-sm-5">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama dan marga" onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon isi nama lengkap.</div>
                            </div> -->
                            <label for="nama">Periode jadwal :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Awal</label>&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="tglawal" required>
                                        <option selected="true" disabled="disabled" value ="">Tgl...</option>
                                        <?php
                                            for($i=1;$i<32;$i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                    &nbsp;&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="bulanawal" required>
                                        <option selected="true" disabled="disabled" value ="">Bulan...</option>
                                        <option value="januari">januari</option>
                                        <option value="februari">februari</option>
                                        <option value="maret">maret</option>
                                        <option value="april">april</option>
                                        <option value="mei">mei</option>
                                        <option value="juni">juni</option>
                                        <option value="juli">juli</option>
                                        <option value="agustus">agustus</option>
                                        <option value="september">september</option>
                                        <option value="oktober">oktober</option>
                                        <option value="november">november</option>
                                        <option value="desember">desember</option>
                                    </select>
                                    &nbsp;&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="tahunawal" required>
                                        <option selected="true" disabled="disabled" value ="">Tahun...</option>
                                        <?php
                                            for($i=2021;$i<2040;$i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Akhir</label>&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="tglakhir" required>
                                        <option selected="true" disabled="disabled" value ="">Tgl...</option>
                                        <?php
                                            for($i=1;$i<32;$i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                    &nbsp;&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="bulanakhir" required>
                                        <option selected="true" disabled="disabled" value ="">Bulan...</option>
                                        <option value="januari">januari</option>
                                        <option value="februari">februari</option>
                                        <option value="maret">maret</option>
                                        <option value="april">april</option>
                                        <option value="mei">mei</option>
                                        <option value="juni">juni</option>
                                        <option value="juli">juli</option>
                                        <option value="agustus">agustus</option>
                                        <option value="september">september</option>
                                        <option value="oktober">oktober</option>
                                        <option value="november">november</option>
                                        <option value="desember">desember</option>
                                    </select>
                                    &nbsp;&nbsp;
                                    <select class="custom-select" id="inputGroupSelect01" name="tahunakhir" required>
                                        <option selected="true" disabled="disabled" value ="">Tahun...</option>
                                        <?php
                                            for($i=2021;$i<2040;$i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-4">
                                <button type="submit" onclick="" class="btn btn-primary">Search</button> 
                            </div>
                        </div>
                    </form>
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
                                                    if(count($jadwalAll) > 0)
                                                    {
                                                        $i = 0;
                                                        foreach ($jadwalAll as $content) {
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



           