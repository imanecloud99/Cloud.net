// On récupère le conteneur principal du diaporama
const diapo = document.querySelector(".diapo")

let elements = document.querySelector(".elements");
let slides = Array.from(elements.children);

// On récupère les deux flèches
let next = document.querySelector("#nav-droite")
let prev = document.querySelector("#nav-gauche")
// Variables globales
let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
let slideWidth = diapo.getBoundingClientRect().width;
// On met en place les écouteurs d'évènements sur les flèches
next.addEventListener("click", slideNext)
prev.addEventListener("click", slidePrev)
/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
    // On incrémente le compteur
    compteur++

    // Si on dépasse la fin du diaporama, on "rembobine"
    if(compteur == slides.length){
        compteur = 0
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--

    // Si on dépasse le début du diaporama, on repart à la fin
    if(compteur < 0){
        compteur = slides.length - 1
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}
let timer = setInterval(slideNext, 4000);
// Gérer le survol de la souris
diapo.addEventListener("mouseover", stopTimer)
diapo.addEventListener("mouseout", startTimer)

/**
 * On stoppe le défilement
 */
function stopTimer(){
    clearInterval(timer)
}

/**
 * On redémarre le défilement
 */
function startTimer(){
    timer = setInterval(slideNext, 4000)
}

// Mise en oeuvre du "responsive"
window.addEventListener("resize", () => {
    slideWidth = diapo.getBoundingClientRect().width
    slideNext()
})
