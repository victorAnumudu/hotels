
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

    // let email = "/\w+@\w+\.\w+/";
    // if(!(email.exec(allInputs.email.value))) {
    //     error.innerText = "Invalid email";
    //     return false;
    // }

    // if(!(allInputs.message.length >= 50)) {
    //     error.innerText = "your characters must be up to 50";
    //     return false;
    // }

    rotate.classList.remove("rotate_hide")
    return true
}