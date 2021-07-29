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