$(document).ready(function () {
    $('#send_btn').click(function () {
        $('#loadingAnimation').removeClass('d-none');  
        console.log("Send button clicked!");

        let email = $("#email").val();
        $("#errorEmail").html('');

        if (email == '') {
            $("#errorEmail").html('Please Enter Email ID');
            $('#loadingAnimation').addClass('d-none');  
        } else {
            $('#send_btn').text('Sending OTP...').attr('disabled', true);
            $.ajax({
                url: 'send_otp.php',
                type: 'POST',
                data: { email: email, type: 'send' },
                success: function (result) {
                    console.log(result);
                    if (result == 'true') {
                        $('#loadingAnimation').addClass('d-none'); 
                        $('#send_btn').addClass('d-none');
                        $('#verify_btn').removeClass('d-none');
                        $('#otp').removeClass('d-none');
                        $('#email').attr('disabled', true);
                    } else {
                        $('#loadingAnimation').addClass('d-none');  
                        $("#errorEmail").html('Failed to send OTP.');
                    }
                },
                error: function () {
                    $('#loadingAnimation').addClass('d-none');  
                    $("#errorEmail").html('Error occurred while sending OTP.');
                }
            });
        }
    });


    $('#verify_btn').click(function () {
        console.log('Verify Btn clicked');
        let otp = $("#otp").val();
        $("#errorEmail").html('');
        if (otp == '') {
            $("#errorEmail").html('Please Enter valid OTP');
        } else {
            $.ajax({
                url: 'check_otp.php',
                type: 'POST',
                data: { otp: otp, type: 'check' },
                success: function (result) {
                    console.log(result);
                    if (result == 'true') {
                        $('#verify_btn').addClass('d-none');
                        $("#otp").addClass('d-none');
                        $("#errorEmail").removeClass('text-danger');
                        $("#errorEmail").html('Email Verified');
                        $("#errorEmail").css('color', 'green');
                    } else {
                        $("#errorEmail").html('Failed to send OTP.');
                    }
                }
            });

        }
    });
});