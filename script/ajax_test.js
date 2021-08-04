

  function loadDoc() {
    let url = "http://localhost/tridentmarine/ajax_info.txt"
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", url, true);
    xhttp.send();
  }

  function displayCourse() {
      
  }