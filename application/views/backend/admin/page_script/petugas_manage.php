<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/jquery.dataTables.min.js">
</script>
<script type="text/javascript" src="<?= base_url() ?>backend/assets/assets/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/dataTables.buttons.min.js">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/jszip.min.js">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/pdfmake.min.js">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/vfs_fonts.js">
</script>
<script type="text/javascript" language="javascript" src="<?= base_url() ?>backend/assets/assets/datatables/buttons.html5.min.js">
</script>

<script>
    $(document).ready(function() {
        $('#dynamic-table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>