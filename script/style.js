function coursesNav(a) {
    if(a == 1){
        $(':root')[0].style.setProperty('--select-position', 'translateX(0%)');
        console.log("1");
    } else if (a == 2) {
        // $("#main_btn").style.setProperty("--select-position", "translateX(calc(100% * 2))");
        $(':root')[0].style.setProperty('--select-position', 'translateX(100%)');
        console.log("2");
    } else if (a == 3) {
        $(':root')[0].style.setProperty('--select-position', 'translateX(calc(100% * 2))');
        console.log("3");
    }
};