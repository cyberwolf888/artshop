<script src="<?= base_url() ?>backend/assets/js/sparkline-chart.js"></script>
<script src="<?= base_url() ?>backend/assets/js/easy-pie-chart.js"></script>

<script>

    function countUp(count)
    {
        var div_by = 100,
            speed = Math.round(count / div_by),
            $display = $('.count'),
            run_count = 1,
            int_speed = 10;

        var int = setInterval(function() {
            if(run_count < div_by){
                $display.text(speed * run_count);
                run_count++;
            } else if(parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp(<?= $total_member ?>);

    function countUp2(count)
    {
        var div_by = 100,
            speed = Math.round(count / div_by),
            $display = $('.count2'),
            run_count = 1,
            int_speed = 10;

        var int = setInterval(function() {
            if(run_count < div_by){
                $display.text(speed * run_count);
                run_count++;
            } else if(parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp2(<?= $total_sales ?>);

    function countUp3(count)
    {
        var div_by = 100,
            speed = Math.round(count / div_by),
            $display = $('.count3'),
            run_count = 1,
            int_speed = 10;

        var int = setInterval(function() {
            if(run_count < div_by){
                $display.text(speed * run_count);
                run_count++;
            } else if(parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    countUp3(<?= $total_new_order ?>);
</script>