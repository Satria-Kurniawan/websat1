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
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });