 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sie Musik Hkbp Jatinegara 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" untuk keluar dari aplikasi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal submit pelayan baru-->
    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Penambahan Pelayan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah sudah yakin dengan semua data ?
            Jika iya klik 'Lanjut'
        </div>
        <div class="modal-footer">
            <button type="button" id="batal" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" id="lanjut" class="btn btn-primary">Lanjut</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

    <!-- Sweet Alert -->
    <script src="<?=base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>

    <!-- Chart -->
    <script src="<?=base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url('assets/'); ?>js/demo/chart-bar-demo.js"></script>

    
	<!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.colVis.min.js"></script> -->

    <!-- Untuk datatables unduh pdf dsb -->
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/dataTables.buttons.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/jszip.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/pdfmake.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/vfs_fonts.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.html5.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.print.min.js"></script>
    <script src="<?=base_url('assets/'); ?>vendor/datatables/tambahan/buttons.colVis.min.js"></script>

    <!-- Untuk datepicker-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );

    </script>

    <!-- <script>
        $(document).ready(function(){
            $(function() {
                $('#daftarPelayan').click(function(e) {
                        e.preventDefault();
                        console.log("bisa nih di klik");
                    });
                });
        });
    </script> 



</body>

</html>