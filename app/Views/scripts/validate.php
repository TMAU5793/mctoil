$('#submit_discount').on('click', function() {
    var validator = $("#frmDiscount").valid();
    if (!validator) {
        $('#frmDiscount input').parents('.input-group').addClass('error');
        $('.promotion-body').css({ 'padding': '3rem 0' });
    } else {
        // $.ajax({
        //     type: "POST",
        //     url: "<?= base_url('download/create'); ?>",
        //     data: $(form).serialize(),
        //     success: function(response) {

        //     }
        // });
        $("#frmDiscount").submit();
    }
});

$("#frmDiscount").validate({
    rules: {
        txt_name: {
            required: true,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        txt_address: {
            required: true,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        txt_email: {
            required: true,
            email: true,
            normalizer: function(value) {
                return $.trim(value);
            }
        },
        txt_phone: {
            required: true,
            number: true,
            normalizer: function(value) {
                return $.trim(value);
            }
        }
    },
    messages: {
        txt_name: {
            required: '*กรุณากรอกข้อมูล'
        },
        txt_address: {
            required: '*กรุณากรอกข้อมูล'
        },
        txt_email: {
            required: '*กรุณากรอกข้อมูล',
            email: '*รูปแบบอีเมลไม่ถูกต้อง'
        },
        txt_phone: {
            required: '*กรุณากรอกข้อมูล',
            number: '*กรุณากรอกตัวเลข',
        }
    }
});