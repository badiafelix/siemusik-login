
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="col-7">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                        <form name="formdaftar" id ="formdaftar" class="needs-validation" action="" novalidate>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama dan marga" onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon isi nama lengkap.</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" id="usernameDepan" name="usernameDepan" class="form-control" placeholder="Nama Depan" onkeypress="return /^[a-zA-Z]+$/i.test(event.key)" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">.</label>
                                    <input type="text" id="usernameBelakang" name="usernameBelakang" class="form-control" placeholder="Marga" onkeypress="return /^[a-zA-Z]+$/i.test(event.key)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat Email</label>
                                <input type="email" class="form-control form-control-user" id="email"
                                name="email" placeholder="Alamat Email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon input email dengan benar.</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tgl">Tgl Lahir</label>
                                    <input type="text" class="form-control" id="tgl" name="tgl" placeholder="tgl" onkeypress="return /^[0-9]+$/i.test(event.key)" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Isi tgl.</div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="bulan">.</label>
                                    <select class="custom-select mr-sm-2" id="bulan" name="bulan" required>
                                        <option selected="true" disabled="disabled" value ="">Bulan...</option>
                                        <option value="01">januari</option>
                                        <option value="02">februari</option>
                                        <option value="03">maret</option>
                                        <option value="04">april</option>
                                        <option value="05">mei</option>
                                        <option value="06">juni</option>
                                        <option value="07">juli</option>
                                        <option value="08">agustus</option>
                                        <option value="09">september</option>
                                        <option value="10">oktober</option>
                                        <option value="11">november</option>
                                        <option value="12">desember</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Isi bulan.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tahun">.</label>
                                    <input type="number" min="1" min="3000" class="form-control" placeholder="Tahun" name="tahun" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Isi tahun.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender">Sektor</label>
                                <select class="custom-select mr-sm-2" id="sektor" name="sektor" required>
                                    <option selected="true" disabled="disabled" value ="">Pilih...</option>
                                    <option value="diaspora">Diaspora</option>
                                    <option value="efesus">Efesus</option>
                                    <option value="filipi">Filipi</option>
                                    <option value="galatia">Galatia</option>
                                    <option value="judika">Judika</option>
                                    <option value="kolose">Kolose</option>
                                    <option value="korintus">Korintus</option>
                                    <option value="lukas">Lukas</option>
                                    <option value="markus">Markus</option>
                                    <option value="matius">Matius</option>
                                    <option value="paulus">Paulus</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon pilih sektor.</div>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="custom-select mr-sm-2" id="gender" name="gender" required>
                                    <option selected="true" disabled="disabled" value = "">Pilih...</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon pilih gender.</div>
                            </div>
                            <div class="form-group">
                                <label for="posisi">Posisi Pelayan</label>
                                <select class="custom-select mr-sm-2" id="posisi" name="posisi" required>
                                    <option selected="true" disabled="disabled" value = "">Pilih...</option>
                                    <option value="pemandu">Pemandu</option>
                                    <option value="pemusik">Pemusik</option>
                                    <option value="operator">Operator</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon pilih posisi pelayan.</div>
                            </div>
                            <div class="form-group">
                                <label for="posisi">Instrumen</label>
                                <select class="custom-select mr-sm-2" id="instrumen" name="instrumen" required>
                                    <option selected="true" disabled="disabled" value = "">Pilih...</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon isi jenis alat musik.</div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name ="alamat" placeholder="Alamat" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Mohon isi alamat.</div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="isoperator" name="isoperator">
                                    <label class="form-check-label" for="exampleCheck1">*Bagi pemusik dan pemandu, centang jika pelayan juga bertugas sebagai operator proyektor</label>
                                </div>
                            </div>
                            <button type="submit" id ="daftarPelayan" class="btn btn-primary" style="float: right;">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">

    //untuk ubah select menu id instrumen
    document.getElementById("posisi").onchange = function () {
        var bla = $('#alamat').val();
        console.log(bla);
        document.getElementById("instrumen").setAttribute("disabled", "disabled");
        if (this.value == 'pemandu'){
            document.getElementById("instrumen").innerHTML = "";
            document.getElementById("instrumen").removeAttribute("disabled");
            document.getElementById("instrumen").innerHTML+= "<option value='vokal'>Vokal</option>";
        }
        else if(this.value == 'pemusik'){
            document.getElementById("instrumen").innerHTML = "";
            document.getElementById("instrumen").removeAttribute("disabled");
            document.getElementById("instrumen").innerHTML+= "<option selected='true' disabled='disabled' value = ''>Pilih...</option><option value='organ'>organ</option><option value='piano'>piano</option><option value='keyboard'>keyboard</option><option value='saxofon'>saxofon</option><option value='gitar'>gitar</option><option value='lainnya'>lainnya</option>";
        }
        else{
            document.getElementById("instrumen").innerHTML = "";
            document.getElementById("instrumen").removeAttribute("disabled");
            document.getElementById("instrumen").innerHTML+= "<option value='proyektor'>Proyektor</option>";
        }
    };


    //untuk validasi form
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                else
                {
                    event.preventDefault();
                    submitPelayan();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
    })();

    $('#posisi').on('change', function() {
        var value = $(this).val();
        if(value == 'operator')
        {
            $('#isoperator').attr('disabled', true);
        }
        else if(value == 'pemandu' || value == 'pemusik')
        {
            $('#isoperator').attr('disabled', false);
        }
    });

    function submitPelayan()
    {
        var form= $("#formdaftar");
        var url = "<?= base_url('admin/insertpelayanbaru')?>";
        $.ajax({
            url : url,
            data: form.serialize(),
            type: 'POST',
            success: function(data){
                var obj = JSON.parse(data);
                if(obj.status = 'SUCCESS')
                {
                    
                    Swal.fire({
                        title: 'Success!',
                        text: obj.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        window.location.href = "<?= base_url('admin/pendaftaranpelayan')?>";
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

    }

    // $(function() {
    //     $('#lanjut').click(function(e) {
    //             e.preventDefault();
    //             console.log("eh bisa loh");
    //             var form= $("#formdaftar");
    //             var url = "<?= base_url('user/insertpelayanbaru')?>";
    //             //console.log(url);
    //             $.ajax({
    //                 url : url,
    //                 data: form.serialize(),
    //                 type: 'POST',
    //                 success: function(data){
    //                     //Show popup
    //                     console.log(data);
    //                 }
    //             });
                
    //     });
    // });

</script>

           