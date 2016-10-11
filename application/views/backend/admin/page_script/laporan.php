<script type="text/javascript" src="<?= base_url() ?>backend/assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?= base_url() ?>backend/assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript">
    $('#start_date').datepicker({
        format: "dd-mm-yyyy",
        //startDate: '16-06-2016',
        autoclose: true,
        todayHighlight: true
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        console.log(selected.date.valueOf());
        $('#end_date').datepicker('setStartDate',minDate);
    });
    $('#end_date').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true
    });
</script>