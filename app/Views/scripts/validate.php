$('#submit_discount').on('click', function() {
    var validator = $("#frmDiscount").valid();
    $('#submit_discount').hide();
    $('.loader').show();
    if (!validator) {
        $('#frmDiscount input').parents('.input-group').addClass('error');
        $('.promotion-body').css({ 'padding': '3rem 0' });
    } else {
        $.ajax({
            type: "POST",
            url: "<?= base_url('landing/register'); ?>",
            data: $("#frmDiscount").serialize(),
            success: function(response) {
                if (response) {
                    var html = "";
                    html += '<div class="modal fade mct-modal-success" id="mctModal">';
                    html += '<div class="modal-dialog modal-dialog-centered">';
                    html += '<div class="modal-content">';
                    html += '<div class="modal-header">';
                    html += '<h4 class="modal-title m-auto fw-600">การลงทะเบียนเรียบร้อย</h4>';
                    html += '</div><div class="modal-body pt-4 pb-4">';
                    html += '<h4>การลงทะเบียนรับส่วนลดของคุณเรียบร้อยแล้ว <br> ขอบคุณค่ะ</h4>';
                    html += '<div style="max-width:200px; margin:1.5rem auto;"><img src="<?= base_url("assets/images/mct-oil-logo.png"); ?>" alt="mct oil logo"></div>';
                    html += '</div></div></div></div>';
                    $('footer').append(html);
                    $('#mctModal').modal('show');

                    //form reset data
                    $("#frmDiscount")[0].reset();
                    $('#submit_discount').show();
                    $('.loader').hide();

                    setTimeout(function() {
                        $('#mctModal').modal('hide');
                    }, 3000);
                } else {
                    $("#frmDiscount")[0].reset();
                }
            }
        });
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