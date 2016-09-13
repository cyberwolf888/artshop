<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                //$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
                $(wrapper).append('<div class="row">' +
                    '<div class="col-md-5">' +
                        '<div class="form-group">' +
                            '<select name="label[]" class="form-control">' +
                                '<option value="Color">Color</option> ' +
                                '<option value="Weight">Weight</option> ' +
                                '<option value="Dimensions">Dimensions</option> ' +
                                '<option value="Size">Size</option> ' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-md-5">' +
                        '<input type="text" name="value[]" class="form-control" required/>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                        ' <button id="b1" class="btn btn-danger remove_field" type="button">-</button>' +
                    '</div>' +
                    '</div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
</script>