function getXMLHTTPRequest() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else {
    // code for old IE browsers
    return new ActiveXObject('Microsoft.XMLHTTP');
  }

}

// Fungsi urlAjax
function callAjax(url, inner) {
  var xmlhttp = getXMLHTTPRequest();
  xmlhttp.open('GET', url, true);
  xmlhttp.onreadystatechange = function () {
    document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(inner).innerHTML = xmlhttp.responseText;
    }
    return false;
  };
  xmlhttp.send(null);
}

function showPesanan() {
  var status = document.getElementById('status').value;
  var inner = 'detail_pesanan';
  var url = 'get_pesanan.php?id=' + status;
  if (status == '') {
    document.getElementById(inner).innerHTML = '';
  } else {
    callAjax(url, inner);
  }
}