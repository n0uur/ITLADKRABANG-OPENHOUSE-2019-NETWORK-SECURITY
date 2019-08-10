function login() {
    var username = document.form.username.value;
    var password = document.form.password.value;
    var messageBox = document.getElementById('messageBox');
    var img = document.getElementById('img');

    if (username == 'Neon_naui_biolleta' && password == 'LALALALA_VIE_EN_ROSE') {
        alert('Congratulations ! Here is your flag1 ' + atob('MW5zcDNjdA=='));
        messageBox.innerHTML = 'Well done WIZ*ONE !\n Flag of this problem is IT@KMITL{flag1-flag2-flag3}';
        img.setAttribute('src', './images/praise.jpg');
    }

    else {
        alert('Username or Password are incorrect !!');
    }
    event.preventDefault();
}

function forgetPass() {
    var messageBox = document.getElementById('messageBox');
    var img = document.getElementById('img');
    img.setAttribute('src', './images/angry.jpg')
    messageBox.innerHTML = "Who are you intruder !! Chaewon will never forget the Password !!";
}
