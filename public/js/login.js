// checking for empty fields in the form
let emptyFields = () => {
    let rotate = document.querySelector(".rotate");
    let allInputs = document.querySelector("form");
    let error = document.getElementById("error");
    error.setAttribute("class" , "error_message");

    // testing for any empty field;
    for(i of allInputs.elements) {
        if(i.value == "") {
            error.innerText = "Please fill all fields!";
            return false;
        }
    }

    rotate.classList.remove("rotate_hide")
    return true
}


//changing the password type from password to text
let inputBox = document.querySelector("input[type=password]");
let showHideBtn = document.querySelectorAll(".show_hide_pwd");// lock and unlock icons on the password input box
let showHidePassword = () => {
    
    if(inputBox.type == "password") {
        inputBox.setAttribute("type", "text");
        showHideBtn[0].style.display = "none";
        showHideBtn[1].style.display = "block";
    } else {
        inputBox.setAttribute("type", "password")
        showHideBtn[0].style.display = "block";
        showHideBtn[1].style.display = "none";
    }
}


showHideBtn.forEach(item => {
    item.addEventListener("click", function(){
        showHidePassword(item);
    })
})

