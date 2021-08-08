document.addEventListener("DOMContentLoaded", function(event) {

    //Un commentaire
    console.log("Ça fonctionne!!!");

    var navbar = document.querySelector(".navbar")
    var ham = document.querySelector(".iconemenu");

        ham.addEventListener("click", toggleHamburger);

    function toggleHamburger(){
        navbar.classList.toggle("showNav")
        ham.classList.toggle("showClose")
    }
});