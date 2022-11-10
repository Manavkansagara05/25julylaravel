
function openNav() { 
    var element = document.getElementById("javascript"); 
    element.classList.remove("remove"); 
    element.classList.remove("none"); 
    element.classList.add("block"); 
} 
function closeNav() { 
    var elementa = document.getElementById("javascript"); 
    elementa.classList.add("remove");
}



// nav bar end stick-------------------
window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})
// nav bar end sticky //



