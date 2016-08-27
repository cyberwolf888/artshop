<!--main content end-->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        <?= date('Y') ?> &copy; Mahartha Handicraft.
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url() ?>backend/assets/js/jquery.js"></script>
<script src="<?= base_url() ?>backend/assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url() ?>backend/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url() ?>backend/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url() ?>backend/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?= base_url() ?>backend/assets/js/owl.carousel.js" ></script>
<script src="<?= base_url() ?>backend/assets/js/jquery.customSelect.min.js" ></script>
<script src="<?= base_url() ?>backend/assets/js/respond.min.js" ></script>

<!--right slidebar-->
<script src="<?= base_url() ?>backend/assets/js/slidebars.min.js"></script>

<!--common script for all pages-->
<script src="<?= base_url() ?>backend/assets/js/common-scripts.js"></script>

<!--script for this page-->
<?php
if(isset($script)){
    $this->load->view($script);
}
?>

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
</html>