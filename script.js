var username = document.forms.form.username;
var password = document.forms.form.password;
var tipe = document.forms.form.tipe;
var ruang = document.forms.form.ruang;
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

function callAjax(url, inner) {
    const xmlHttp = getXMLHttpRequest();
    xmlHttp.open("GET", url, true);
  
    xmlHttp.onreadystatechange = function () {
      document.getElementById(inner).innerHTML =
        '<img src="../img/ajax_loader.png" alt="ajax_loader" />';
  
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById(inner).innerHTML = xmlHttp.responseText;
      }
  
      return false;
    };
  
    xmlHttp.send(null);
}

tipe.onchange = function () {
  var xhr = new XMLHttpRequest();

  xhr.open("GET", "get_ruangan.php?id=" + tipe.value);

  xhr.onload = function () {
      ruang.innerHTML = xhr.responseText;
  };

  xhr.send();
}

/*function getroom(id_tipe) {
    const inner = "tipe";
    const url = `get_ruangan.php?id_tipe=${id_tipe}`;
  
    if (id_tipe == "") {
      document.getElementById(inner).innerHTML = "";
    } else {
      callAjax(url, inner);
    }
  }
*/
