var index = 0;
var i = 0;
var images = document.getElementsByClassName("images");
var btm_slider = document.getElementsByClassName("btm_slider");

auto()

function show(n){
    for(i=0;i<images.length;i++) { //images.length=4
        images[i].style.display="none";
    }
    for(i=0;i<btm_slider.length;i++) { //btm_slider.length=4
        btm_slider[i].className=btm_slider[i].className.replace("active");
    }
    images[n-1].style.display=("block");
    btm_slider[n-1].className += " active"; //add space
}

function auto() {
    index++;
    if (index > images.length) { //to move from last slide to first slide
        index = 1;
    }
    show(index); //calling show
    setTimeout(auto, 5000); //next slide will appear after 5s
}

function plusSlide(n) {
    index += n; //n=1 or n=-1
    if (index > images.length) { //to move from last slide to first slide
        index = 1;
    }
    if (index < 1) { //to move from first to last
        index = images.length;
    }
    show(index);
}

function currentSlide(n) {
    index = n;
    show(index);
}