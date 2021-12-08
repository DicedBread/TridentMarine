function courseSessions() {
    courseId = $("#course").val();
    // console.log(course);
    let url = "http://localhost/TridentMarine/get_course_sessions.php?courseId=" + courseId;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("display").innerHTML = this.responseText;
    }
    xhttp.open("GET", url, true);
    xhttp.send();
};

function addCourse(){
    event.preventDefault();
    courseId = $("#course").val();
    newDate = $("#alternate").val();
    newTime = $("#timePicker").val();
    if(newTime){
        $("#timeError").hide();
        let url = "http://localhost/TridentMarine/add_course_sessions.php?courseId=" + courseId + "&newDate=" + newDate + "&newTime=" + newTime;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("display").innerHTML = this.responseText;
        }
        xhttp.open("GET", url, true);
        xhttp.send();
    }else{
        $("#timeError").show();
    }
}

// let url = "http://localhost/TridentMarine/get_course_info.php?selection=" + selected;
//     const xhttp = new XMLHttpRequest();
//     xhttp.onload = function() {
//       document.getElementById("courseDisplay").innerHTML = this.responseText;
//     }
//     xhttp.open("GET", url, true);
//     xhttp.send();
