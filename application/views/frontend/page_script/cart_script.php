<script>
    function addQty(id,val){
        qty = $("#"+id);
        qty.val(parseInt(qty.val())+parseInt(val));
        updateQty(id,qty.val());
    }
    function minQty(id,val){
        qty = $("#"+id);
        if(qty.val()>1){
            qty.val(parseInt(qty.val())-parseInt(val));
        }
        updateQty(id,qty.val());
    }
    function updateQty(id, qty) {
        $.post('<?= base_url('frontend/updateCart') ?>',{rowid:id,qty:qty})
            .done(function () {

            });
    }
</script>