$('#submit_discount').on('click', function() {
    var validator = $("#frmDiscount").valid();
    if (!validator) {
        $('#frmDiscount input').parents('.input-group').addClass('error');
        $('.promotion-body').css({ 'padding': '3rem 0' });
    } else {
        $.ajax({
            type: "POST",
            url: "<?= base_url('landing/register'); ?>",
            data: $("#frmDiscount").serialize(),
            success: function(response) {
                console.log(response);
                var html = "";
                html += '<div class="modal mct-modal-success" id="mctModal">';
                html += '<div class="modal-dialog">';
                html += '<div class="modal-content">';
                html += '<div class="modal-header">';
                html += '<h4 class="modal-title">Modal Heading</h4>';
                html += '<button type="button" class="close" data-dismiss="modal">&times;</button></div>';
                html += '<div class="modal-body"></div>';
                html += '<div class="modal-footer">';
                html += '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
                html += '</div></div></div></div>';
                $('footer').append(html);
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