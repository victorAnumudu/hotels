
let myParaCon = document.querySelector(".section_paragraph_justified"); // getting the paragraph content
let oldText = myParaCon.textContent;
let newPara = (myParaCon.textContent).split("");
myParaCon.textContent = (newPara.splice(0, 500)).join("") + "...";

let readMoreBtn = document.querySelector(".read_more"); // the read more btn
readMoreBtn.style.display = "flex";


// function to expand or collaspe the content in the about section using the btn read more!
let showFullAbout = () => {
    if(oldText == myParaCon.textContent) {
        myParaCon.textContent = (newPara.splice(0, 500)).join("") + "...";
        readMoreBtn.textContent = "read more!"
    } else {
        myParaCon.textContent = oldText;
        readMoreBtn.textContent = "collaspe"
    }
}
readMoreBtn.addEventListener("click", showFullAbout)