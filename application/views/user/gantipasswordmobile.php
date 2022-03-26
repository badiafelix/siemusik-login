
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">WELCOME<?= " " . $user['nickname']; ?></a>

  </nav>
</div>

<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
    <!-- <img class="mr-3" src="/docs/4.4/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48"> -->
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100"><?= $title;?></h6>
      <!-- <small>Since 2011</small> -->
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
   
  <div class="md-form mb-2">
  <form>
                        <input type="hidden" name = "hiddenvalue" id="hiddenvalue" value=""/>
                        <label for="posisi">Password Lama</label>
                        <input type="password" class="form-control form-control-user" id="passLama" name="passLama" placeholder="Masukkan pass lama" required>
                    </div>
                    <div class="md-form mb-2">
                        <label for="posisi">Password Baru</label>
                        <input type="password" class="form-control form-control-user" id="passBaru" name="passBaru" placeholder="Masukkan pass baru" required>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary" id="gantiPassword">SUBMIT</button>
                    </div>
  </form>
  </div>

  

  <!-- <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div>
</main> -->

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
    <!-- Bootstrap core JavaScript-->
    

</html>
            <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?=base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?=base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>
            <script language="JavaScript" type="text/javascript">

            $(function () {
                'use strict'

                $('[data-toggle="offcanvas"]').on('click', function () {
                    $('.offcanvas-collapse').toggleClass('open')
                })
            })

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

