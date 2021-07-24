

// function to determine the width of the screen
let checkScreenWidth = () => {
    return innerWidth;
}

let testimonialCounter = 0;
// function to change a new testimonial
let changeTestimonial = () => {
    let testimonials = document.querySelectorAll(".testimonial_section");

    if(testimonialCounter >= testimonials.length){
        testimonialCounter = 0;
    } else if(testimonialCounter < 0) {
        testimonialCounter = testimonials.length-1;
    }
    
    for(i=0; i<testimonials.length; i++){ // making all the testimonial not to display
        testimonials[i].style.display = "none";
    }

    if(checkScreenWidth() >= 577) { // display the testimonial where where the element index is testimonial counter
        testimonials[testimonialCounter].style.display = "flex";
    } else if(checkScreenWidth() < 577) {
        testimonials[testimonialCounter].style.display = "block";
    }   
    testimonialCounter++;
}
changeTestimonial();

setInterval(changeTestimonial, 4000);

// adding a function to next or previous the testimonial slide based on the the selector clicked
document.querySelectorAll(".testimonial_selector").forEach(item => {
    item.addEventListener("click", function(){
        if(item.classList.contains("selector_left")){
            testimonialCounter -= 2;
            changeTestimonial();
        } else if (item.classList.contains("selector_right")) {
            testimonialCounter++;
            changeTestimonial();
        }
    })
})
