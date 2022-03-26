
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <form>
                        <div class="form-row">
                            <div class="col-sm-4">
                                <label for="exampleInputEmail1">Password Lama</label>
                                <input type="password" class="form-control" id="passLama" name="passLama" placeholder="Password Baru">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-4">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" id="passBaru" name="passBaru" placeholder="Password Baru">
                                <small class="form-text text-muted">Klik submit untuk mengganti password</small>
                            </div>
                        </div>
                        <div class="col-sm-10">
                    <button type="submit" id= "gantiPassword" class="btn btn-primary">Submit</button>
                    </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            
            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script language="JavaScript" type="text/javascript">


              $(function() {
                $('#gantiPassword').click(function(e) {
                    e.preventDefault();
                    var passLama = $("#passLama").val().toString();
                    var passBaru = $("#passBaru").val().toString();
                    console.log(passLama,passBaru)

                    var url = "<?= base_url('user/updategantipassword')?>";
                    $.ajax({
                        url : url,
                        method: "POST",
                        dataType : "json",
                        data: { 'passLama' : passLama,
                                'passBaru' : passBaru },
                        success: function(data)
                        {
                            console.log(data);
                            if(data.status == "SUCCESS")
                            {
                                Swal.fire({
                                    title: 'Success!',
                                    text: data.message,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                window.location.href = "<?= base_url('user/gantipassword')?>";
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
            });

            </script>

           