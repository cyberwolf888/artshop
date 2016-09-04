<script src="<?= base_url() ?>backend/assets/js/sparkline-chart.js"></script>
<script src="<?= base_url() ?>backend/assets/js/easy-pie-chart.js"></script>
<script src="<?= base_url() ?>backend/assets/js/count.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>