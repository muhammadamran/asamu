<script src="<?= base_url('assets/js/vendor-all.min.js')?>"></script>
<script src="<?= base_url('assets/js/plugins/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/js/plugins/feather.min.js')?>"></script>
<script src="<?= base_url('assets/js/pcoded.min.js')?>"></script>
<!-- Apex Chart -->
<!-- <script src="<?= base_url('assets/js/plugins/apexcharts.min.js')?>"></script> -->
<!-- custom-chart js -->
<!-- <script src="<?= base_url('assets/js/pages/dashboard-sale.js')?>"></script> -->
<!-- Toastr -->
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js')?>"></script>
<!-- DATATABLES -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script type="text/javascript" language="javascript" >
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'csv',
                'excel',
                'pdf',
                {
                    extend: 'print',
                    text: 'Print',
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                }
            ],
            select: true
        } );
    } );
</script>
<!-- END DATATABLES -->
</body>
</html>