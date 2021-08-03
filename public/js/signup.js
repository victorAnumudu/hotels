
// checking for empty fields in the form
let emptyFields = () => {
    let rotate = document.querySelector(".rotate");
    let form = document.querySelector("form");
    let error = document.getElementById("error");
    error.setAttribute("class" , "error_message");

    // testing for any empty field;
    for(i of form.elements) {
        if(i.value == "") {
            error.innerText = "Please fill all fields!";
            return false;
        }
    }

    // validating email
    let email = /\w+@\w+\.\w+/;
    if(!(email.exec(form.email.value))) {
        error.innerText = "Invalid email";
        return false;
    }

    if(form.password.value != form.repeat_password.value){
        error.innerText = "password do not match";
        return false;
    }
    
    if(form.password.value.length < 8){
        error.innerText = "password must be upto 8 characters";
        return false;
    }
    // validating phone number
    let phoneNum = /[0-9]{11}/;
    if(!(phoneNum.exec(form.contact.value))){
        error.innerText = "Phone number must be digits alone";
        return false;
    }

    if(form.contact.value.length < 11 || form.contact.value.length > 11){
        error.innerText = "Phone number must be 11 digits";
        return false;
    }
    

    rotate.classList.remove("rotate_hide")
    return true
}


// for passport
let displayImage = () => {
    // let image = document.querySelector(".passport_image");
    // let imagePath = document.getElementById("passport").files[0].name;
    // imageSrc.setAttribute("src", document.getElementById("passport").value)
    console.log(imagePath)
}

document.getElementById("passport").addEventListener("change", displayImage)