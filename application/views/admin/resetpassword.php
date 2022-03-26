
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                    <form>
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">Nama Pelayan</label>
                        <select class="custom-select mr-sm-2" id="namaPelayan" name="namaPelayan" required>
                            <option selected="true" disabled="disabled" value = "">Pilih..</option>
                            <?php               
                                foreach ($daftarpelayan as $content) {
                                    echo "<option value='$content->usr_nip.$content->pln_dob'>$content->usr_name</option>";
                                }
                            ?> 
                            
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="form-check-label" for="exampleCheck1">*Reset pasword kembali ke format ddmmyyyy</label>
                    </div>
                    <div class="form-group col-sm-4">
                        <button type="submit" id= "resetPassword" class="btn btn-primary" style="float: right;">Reset</button>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script language="JavaScript" type="text/javascript">


              $(function() {
                $('#resetPassword').click(function(e) {
                    e.preventDefault();
                    var value = $("#namaPelayan").val().toString();
                    //window.alert(value);

                    var url = "<?= base_url('admin/updateresetpassword')?>";
                    $.ajax({
                        url : url,
                        method: "POST",
                        dataType : "json",
                        data: { 'value' : value },
                        success: function(data)
                        {
                            if(data.status == "SUCCESS")
                            {
                                Swal.fire({
                                    title: 'Success!',
                                    text: data.message,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
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

           