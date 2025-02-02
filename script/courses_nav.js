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
    $('#dropIcon').toggleClass("rotate");
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

function slideShow(){
    let num = 0;
    window.setInterval(function(){
        num = (num + 1) % 4;
        // console.log(num);
        if (num == 1){
            //visable
            $('#heroImage1').toggleClass("heroimage_display_none", false);
            $('#heroImage1').toggleClass("heroimage_display", true);
            //hidden
            $('#heroImage2').toggleClass("heroimage_display_none", true );
            $('#heroImage2').toggleClass("heroimage_display", false );
            $('#heroImage3').toggleClass("heroimage_display_none", true );
            $('#heroImage3').toggleClass("heroimage_display", false );
            $('#heroImage4').toggleClass("heroimage_display_none", true );
            $('#heroImage4').toggleClass("heroimage_display", false );
            
        } else if (num == 2){
            //visable
            $('#heroImage2').toggleClass("heroimage_display_none", false );
            $('#heroImage2').toggleClass("heroimage_display", true );
            //hidden
            $('#heroImage1').toggleClass("heroimage_display_none", true );
            $('#heroImage1').toggleClass("heroimage_display", false );
            $('#heroImage3').toggleClass("heroimage_display_none", true );
            $('#heroImage3').toggleClass("heroimage_display", false );
            $('#heroImage4').toggleClass("heroimage_display_none", true );
            $('#heroImage4').toggleClass("heroimage_display", false );
            
        } else if (num == 3){
            //visable
            $('#heroImage3').toggleClass("heroimage_display_none", false );
            $('#heroImage3').toggleClass("heroimage_display", true );
            //hidden
            $('#heroImage1').toggleClass("heroimage_display_none", true );
            $('#heroImage1').toggleClass("heroimage_display", false );
            $('#heroImage2').toggleClass("heroimage_display_none", true );
            $('#heroImage2').toggleClass("heroimage_display", false );
            $('#heroImage4').toggleClass("heroimage_display_none", true );
            $('#heroImage4').toggleClass("heroimage_display", false );
        } else if (num == 0){
            //visable 
            $('#heroImage4').toggleClass("heroimage_display_none", false );
            $('#heroImage4').toggleClass("heroimage_display", true );
            //hidden
            $('#heroImage1').toggleClass("heroimage_display_none", true );
            $('#heroImage1').toggleClass("heroimage_display", false );
            $('#heroImage2').toggleClass("heroimage_display_none", true );
            $('#heroImage2').toggleClass("heroimage_display", false );
            $('#heroImage3').toggleClass("heroimage_display_none", true );
            $('#heroImage3').toggleClass("heroimage_display", false );
        }

    }, 10000);
}


    
  







