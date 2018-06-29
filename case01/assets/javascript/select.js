let starElement = document.querySelector(".fas fa-star");

// starElement.addEventListener("click", function(){
//     if (starElement == "grey") {
//         starElement.classList.add("blue");
//     }
//     else {
//         starElement = "grey";
//     }
// });

function toogleClass (el) {
    if(el.className == "grey"){
        el.className = "blue";
    }   else {
        el.className = "grey";
    }
}