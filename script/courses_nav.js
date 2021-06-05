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
    if (state == 1) {
        $("#mobileNav").css("display", "flex");
        $("#blur").css("display", "block");
        $("#dropIcon").css("transform", "rotate(180deg)");
    } else if (state == 2) {
        $("#mobileNav").css("display", "none");
        $("#blur").css("display", "none");
        $("#dropIcon").css("transform", "0");
    }
};