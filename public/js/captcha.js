let captcha;
function generate() {

    // Clear old input
    document.getElementById("submit").value = "";

    captcha = document.getElementById("image");
    let uniquechar = "";

    const randomchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (let i = 1; i < 5; i++) {
        uniquechar += randomchar.charAt(
            Math.random() * randomchar.length)
    }

    // Store generated input
    captcha.innerHTML = uniquechar;
}

function printmsg() {
    const usr_input = document.getElementById("submit").value;
    captcha = document.getElementById("image");
    if (usr_input == captcha.innerHTML) {
        let s = document.getElementById("key");
        s.innerHTML = "Captcha Matched";
        s.classList.remove('text-danger');
        s.classList.add('text-success');
        let btn = document.getElementById('btn_check');
        btn.classList.add('d-none');
        let refresh = document.getElementById('refresh');
        refresh.classList.add('d-none');
        let image = document.getElementById('image');
        image.classList.add('d-none');
        $('.captcha_code').attr('disabled', true);
        
    }
    else {
        let s = document.getElementById("key")
            .innerHTML = "Please Enter Valid Captcha code";
        generate();
    }
}
