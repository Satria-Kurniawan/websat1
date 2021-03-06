$(document).ready(function() {
    $('#checkbox').click(function() {

        if ($(this).is(':checked')) {
            $('#pwd1').attr('type', 'text');
            $('#pwd2').attr('type', 'text');
        } else {
            $('#pwd1').attr('type', 'password');
            $('#pwd2').attr('type', 'password');
        }
    })
})