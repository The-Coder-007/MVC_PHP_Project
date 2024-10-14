function reg_form(str) {
    if (str.full_name.value.trim() === "") {
        document.getElementById('msg1').innerHTML = 'Please fill up the blanks!';
        str.full_name.focus();
        return false;
    }

    if (!str.full_name.value.match(/^[a-zA-Z]+$/)) {
        document.getElementById('msg1').innerHTML = 'Please enter only characters!';
        str.full_name.focus();
        return false;
    }

    if (str.username.value.trim() === "") {
        document.getElementById('msg2').innerHTML = 'Please enter Email!';
        str.username.focus();
        return false;
    }

    if (!str.username.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/)) {
        document.getElementById('msg2').innerHTML = 'Please enter a valid Email address!';
        str.username.focus();
        return false;
    }

    if (str.img.value.trim() === "") {
        document.getElementById('msg3').innerHTML = 'Please upload a profile image!';
        str.img.focus();
        return false;
    }

    if (str.phone.value.trim() === "") {
        document.getElementById('msg4').innerHTML = 'Please fill up the phone number!';
        str.phone.focus();
        return false;
    }

    var gen_arr = document.getElementsByName("gender");
    if (!gen_arr[0].checked && !gen_arr[1].checked && !gen_arr[2].checked) {
        document.getElementById('msg5').innerHTML = 'Please select gender!';
        return false;
    }

    if (str.pass.value.trim() === "") {
        document.getElementById('msg6').innerHTML = 'Please enter a password!';
        str.pass.focus();
        return false;
    }

    if (str.pass.value.length < 6) {
        document.getElementById('msg6').innerHTML = 'Password must be at least 6 characters long!';
        str.pass.focus();
        return false;
    }

    var chk_arr = document.getElementsByName("language[]");
    var lang_selected = false;
    for (var i = 0; i < chk_arr.length; i++) {
        if (chk_arr[i].checked) {
            lang_selected = true;
            break;
        }
    }

    if (!lang_selected) {
        document.getElementById('msg8').innerHTML = 'Please select at least one language!';
        return false;
    }

    return true;
}

