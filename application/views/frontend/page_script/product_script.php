<script>
    $("#min_qty").click(function () {
        var qty = $("#qty_cart").val();
        if(qty>1){
            $("#qty_cart").val(qty-1);
        }
    });

    $("#add_qty").click(function () {
        var qty = parseInt($("#qty_cart").val())+1;
        $("#qty_cart").val(qty);
    });

    $("#add_cart").click(function () {
        var qty = $("#qty_cart").val();
        var product_id = $("#product_id").val();
        $.post("<?= base_url('frontend/addCart') ?>", {qty:qty,product_id:product_id})
            .success(function (data) {
                var obj = jQuery.parseJSON( data );
                if(obj.status=="1"){
                    $("#cart_total_item").empty().html(obj.total_item);
                    $.post('<?= base_url('frontend/getCart') ?>',{})
                    .success(function (data) {
                        $("#cart_item_body").empty().html(data);
                    });
                }
            })
    });
</script>