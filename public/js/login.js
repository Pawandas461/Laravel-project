function passValid(){
    var password = document.getElementById('inputPassword5').value;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/;
    if(passwordRegex.test(password)){
        document.getElementById('inputPassword5').classList.remove('is-invalid');
        document.getElementById('errorPass').innerHTML='';
        document.getElementById('b1').disabled=false;
    } else {
        document.getElementById('inputPassword5').classList.add('is-invalid');
        document.getElementById('errorPass').innerHTML="Your password must be 8-20 characters long, contain letters and numbers, special characters, and must not contain spaces or emoji.";
        document.getElementById('b1').disabled=true;
    }
    confirmPassValid(); // Call confirm password check on password validation
}
function phoneValid(){
    var phone = document.getElementById('phone').value;
    var phoneRegex=/^[6-9][0-9]{9}$/;
    if(phoneRegex.test(phone)){
        document.getElementById('phone').classList.remove('is-invalid');
        document.getElementById('errorPhone').innerHTML='';
        document.getElementById('b1').disabled=false;
    } else {
        document.getElementById('phone').classList.add('is-invalid');
        document.getElementById('errorPhone').innerHTML="Phone number must start with 9, 8, 7, or 6 and be exactly 10 digits";
        document.getElementById('b1').disabled=true;
    }
}

