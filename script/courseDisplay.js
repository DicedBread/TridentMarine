

  // function loadDoc() {
  //   let url = "http://localhost/tridentmarine/ajax_info.txt"
  //   const xhttp = new XMLHttpRequest();
  //   xhttp.onload = function() {
  //     document.getElementById("demo").innerHTML = this.responseText;
  //   }
  //   xhttp.open("GET", url, true);
  //   xhttp.send();
  // }

  function displayCourse(selected) {
    let url = "http://localhost/TridentMarine/get_course_info.php?selection=" + selected;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("courseDisplay").innerHTML = this.responseText;
    }
    xhttp.open("GET", url, true);
    xhttp.send();
  }