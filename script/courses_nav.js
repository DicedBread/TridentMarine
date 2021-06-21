
//courses nav
function coursesNav(a) {
    if(a == 1){
        $(':root')[0].style.setProperty('--select-position', 'translateX(0%)');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(0%)');
    } else if (a == 2) {
        $(':root')[0].style.setProperty('--select-position', 'translateX(100%)');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(calc(100% / 3))');
    } else if (a == 3) {
        $(':root')[0].style.setProperty('--select-position', 'translateX(calc(100% * 2))');
        $(':root')[0].style.setProperty('--select-subbtn-posistion', 'translateX(calc(100% / 3 * 2))');
        }
    };

//mobile nav
function mobileNav(){
    $('#mobileNav').toggleClass("hide");
    $('#blur').toggleClass("hide");
};

function test(){
    
}



