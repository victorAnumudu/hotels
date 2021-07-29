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