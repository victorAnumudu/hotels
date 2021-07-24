
let toggleBars = document.querySelectorAll(".nav_toggle_lines");


// function to hide navbar and reset toggle bars once the browser window screen is resized

let hideNav = () => {

    toggleBars[0].classList.remove("change_toggle_line1");
    toggleBars[1].classList.remove("change_toggle_line2");
    toggleBars[2].classList.remove("change_toggle_line3");

    document.querySelector(".nav_list").classList.remove("show_nav");
    
    
}
window.addEventListener("resize", hideNav);



// function to show nav bar one the toggle button is clicked and change the toggle bar sign
let showNav = () => {
    toggleBars[0].classList.toggle("change_toggle_line1");
    toggleBars[1].classList.toggle("change_toggle_line2");
    toggleBars[2].classList.toggle("change_toggle_line3");

    document.querySelector(".nav_list").classList.toggle("show_nav");
}
document.querySelector(".nav_toggle").addEventListener("click", showNav);


//main page slide show
let slideImages = document.querySelectorAll(".main_image");
let slideImageCounter = 0;


let changeSlide = () => {

    if(slideImageCounter >= slideImages.length){
        slideImageCounter = 0;
    } else if(slideImageCounter < 0) {
        slideImageCounter = slideImages.length-1;
    }
    
    slideImages.forEach(item => {
        item.classList.add("slide_image_offpage");
        item.classList.remove("slide_image_onpage");
    })

    slideImages[slideImageCounter].classList.remove("slide_image_offpage");
    slideImages[slideImageCounter].classList.add("slide_image_onpage");
    slideImageCounter++;
}
changeSlide();

setInterval(changeSlide, 3000);


// adding a function to next or previous the slide based on the the slide control clicked
document.querySelectorAll(".slide_controls").forEach(item => {
    item.addEventListener("click", function(){
        if(item.classList.contains("slide_backward")){
            slideImageCounter -= 2;
            changeSlide();
        } else if (item.classList.contains("slide_forward")) {
            slideImageCounter++;
            changeSlide();
        }
    })
})