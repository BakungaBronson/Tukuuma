$(window).scroll(function () {
    if ($(window).scrollTop() > 63) {
        if($('.nav-item').click() === true){
            $('.navbar').removeClass('navbar-fixed');
        }
        else{
            $('.navbar').addClass('navbar-fixed');
        }
    }
    if ($(window).scrollTop() < 64) {
      $('.navbar').removeClass('navbar-fixed');
    }
});

let clicked = 1;

$("#change_color").click(() => {
    if(clicked === 0){
        $(".variation-light").css({"background-color": "rgb(125, 153, 181)", "color": "white"});
        $("h1").css("text-decoration", "none");
        clicked = 1;
        console.log(clicked);
    }
    else if(clicked === 1) {
        $(".variation-light").css({"background-color": "white", "color": "rgb(60, 62, 85)"});
        $("h1").css({"text-decoration": "underline", "text-decoration-color": "rgb(137, 160, 25)"});
        $("#dont_show").css("text-decoration", "none");
        clicked = 0;
        console.log(clicked);
    }
});

