function coursesNav(a) {
    if(a == 1){
        $(':root')[0].style.setProperty('--select-position', 'translateX(0%)');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(0%)');
        console.log("1");
    } else if (a == 2) {
        // $("#main_btn").style.setProperty("--select-position", "translateX(calc(100% * 2))");
        $(':root')[0].style.setProperty('--select-position', 'translateX(100%)');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(calc(100% / 3))');
        console.log("2");
    } else if (a == 3) {
        $(':root')[0].style.setProperty('--select-position', 'translateX(calc(100% * 2))');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(calc(100% / 3 * 2))');
        console.log("3");
    }
};

function mobileNav(state){
    // var x = document.getElementById("myDIV");
    if ($('#mobileNav').style.display === "none") {
        $('#mobileNav').style.display = "flex";
        $('#blur').style.display = "block";
    } else {
        $('#mobileNav').style.display = "none";
        $('#blur').style.display = "none";
    }
};

// var x = document.getElementById("myDIV");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }