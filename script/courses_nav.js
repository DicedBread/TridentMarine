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

        //the moemnt when both classes exist for some reason
        $('#subNavPW').toggleClass("open closed");
        $('#subNavPB').toggleClass("closed", true);
        $('#subNavPB').toggleClass("open", false);
        $('#subNavMC').toggleClass("closed", true);
        $('#subNavMC').toggleClass("open", false);
    } else if (a == 2){ //power boating
        $('#subNavPB').toggleClass("open closed");
        $('#subNavPW').toggleClass("closed", true, "open", false);
        $('#subNavMC').toggleClass("closed", true, "open", false);
    } else if (a == 3){ //motor cruising 
        $('#subNavMC').toggleClass("open closed");
        $('#subNavPW').toggleClass("closed", true, "open", false);
        $('#subNavPB').toggleClass("closed", true, "open", false);
    }
}

// function test(){
//     $('#heroImage1').toggleClass("heroimage_display_none heroimage_display");
//     $('#heroImage2').toggleClass("heroimage_display_none heroimage_display");
//     console.log("bruh");
// };

$(document).ready(function(){
    window.setInterval(function(){
        $('#heroImage1').toggleClass("heroimage_display_none heroimage_display");
        $('#heroImage2').toggleClass("heroimage_display_none heroimage_display");
    }, 2000);
});


    
  







