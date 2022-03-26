


    <!-- Modal bridge-->
    <div class="modal fade" id="bridgeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle">Masuk sebagai ?</h5>
        </div>
        <div class="modal-body">
            <button type="button" id="admin" class="btn btn-primary btn-lg btn-block">Admin</button>
            <button type="button" id="user"class="btn btn-secondary btn-lg btn-block">User</button>
        </div>

        </div>
    </div>
    </div>


    <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript">

    $(function() {
        $('#bridgeModal').modal({backdrop: 'static', keyboard: false});  //untuk disable seluruh kemungkinan close
        $('#bridgeModal').modal('show');

        $('#admin').click(function(e) {
                e.preventDefault();
                url = "<?= base_url('admin/index')?>";
                window.location = url;
                
        });

        $('#user').click(function(e) {
                e.preventDefault();
                url = "<?= base_url('user/index')?>";
                window.location = url;
                
        });
    });

      

 

    </script>

