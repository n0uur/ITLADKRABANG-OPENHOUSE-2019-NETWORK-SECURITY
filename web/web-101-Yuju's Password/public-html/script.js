function login() {
    var username = document.form.username.value;
    var password = document.form.password.value;
    var messageBox = document.getElementById('messageBox');
    var img = document.getElementById('img');

    if (username == 'YuNaaaaaaaaaaa' && password == 'Buddyyyyyyyyyyyyyyyy') {
        alert('Congratulations ! Here is your flag1 ' + atob('J3MzY3VyMyc='));
        messageBox.innerHTML = 'Well done Buddy !\n Flag of this problem is KM[IT]L{flag1-flag2-flag3}';
        img.setAttribute('src', './assets/images/praise.jpg');
    }

    else {
        alert('Username or Password are incorrect !!');
    }
    event.preventDefault();
}

function forgetPass() {
    var messageBox = document.getElementById('messageBox');
    var img = document.getElementById('img');
    img.setAttribute('src', './assets/images/angry.jpg')
    messageBox.innerHTML = "Who are you intruder !! Yuju will never forget the Password !!";
}