$(document).ready(function () {
    $("#current_password").keyup(function () {
        var current_password = $("#current_password").val();
        $.ajax({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            type: 'post',
            url: '/admin-check-current-password',
            data: { current_password: current_password },
            success: function (rep) {

                if (rep == "false") {
                    $("#check_password").html("<font color='red'>Current Password is Incorrect</font>");
                } else {
                    $("#check_password").html("<font color='green'>Current Password is correct</font>");
                }
            }, error: function () {
                alert('Error');
            }
        });
    })
});