var username = document.forms.form.username;
var password = document.forms.form.password;


function submitLogin() {
    var valid = true

    if (username.value == '') {
        error('username', 'Username harus diisi')
        valid = false;
    }
    
    if (password.value == '') {
        error('password', 'Password harus diisi')
        valid = false;
    }

    return valid;
}

function error(id, error) {
    var element = document.getElementById(id + '_error')
    element.innerHTML = error
    element.style.display = 'block'
}

function resetError() {
    document.querySelectorAll('[id$="_error"]')
        .forEach(function (element) {
            element.style.display = 'none'
        })
}
