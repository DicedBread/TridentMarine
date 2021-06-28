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

function mobileCoursesNav(a){
    if (a == 1){ //personal watercraft
        $('#subNavPW').toggleClass("open closed");
        $('#dropIconPW').toggleClass("rotate");
        $('#subNavPB').toggleClass("closed", true);
        $('#subNavPB').toggleClass("open", false);
        $('#subNavMC').toggleClass("closed", true);
        $('#subNavMC').toggleClass("open", false);
        $('#dropIconPB').toggleClass("rotate", false);
        $('#dropIconMC').toggleClass("rotate", false);
    } else if (a == 2){ //power boating
        $('#subNavPB').toggleClass("open closed");
        $('#dropIconPB').toggleClass("rotate");
        $('#subNavPW').toggleClass("closed", true,);
        $('#subNavPW').toggleClass("open", false);
        $('#subNavMC').toggleClass("closed", true);
        $('#subNavMC').toggleClass("open", false);
        $('#dropIconPW').toggleClass("rotate", false);
        $('#dropIconMC').toggleClass("rotate", false);
    } else if (a == 3){ //motor cruising 
        $('#subNavMC').toggleClass("open closed");
        $('#dropIconMC').toggleClass("rotate");
        $('#subNavPW').toggleClass("closed", true);
        $('#subNavPW').toggleClass("open", false);
        $('#subNavPB').toggleClass("closed", true);
        $('#subNavPB').toggleClass("open", false);
        $('#dropIconPW').toggleClass("rotate", false);
        $('#dropIconPB').toggleClass("rotate", false);
    }
}



$(document).ready(function(){
    window.setInterval(function(){
        $('#heroImage1').toggleClass("heroimage_display_none heroimage_display");
        $('#heroImage2').toggleClass("heroimage_display_none heroimage_display");
    }, 2000);
});


    
  







