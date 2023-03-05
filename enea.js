// menu burger

function ToggleMenu() {
    const burger = document.querySelector(".burger");
    const navbar_lien = document.querySelector(".navbar_lien");
    const navlien = document.querySelector(".navlien");
    burger.addEventListener("click", () => {
        burger.classList.toggle("appnav");
    });
    burger.addEventListener("click", () => {
        navbar_lien.classList.toggle("appnav2");
    });
}
ToggleMenu();

// Rotation des cartes pour le format mobile

function ToggleCard() {
    var liste_contenant = document.querySelectorAll(".contenant");
    var liste_card = document.querySelectorAll(".card");
    for (let i = 0; i < liste_contenant.length; i++) {
        const contenant = liste_contenant[i];
        const card = liste_card[i];
        contenant.addEventListener("click", () => {
            if (card.hasAttribute("style")) {
                card.removeAttribute("style");
            } else {
                card.style.transform = "rotateY(180deg)";
            }
        });
    }
}
ToggleCard();


function changeStyleForm() {
document.getElementById("website").style.display = "none";
}

// slider
// const slider = document.querySelector(".slideshow-container");
// let holding = false;
// let firstClickX;
// let alreadyLeftScrolled;
// let velocity;
// let rafID;

// slider.addEventListener("mousedown", (e) => {
//     holding = true;

//     firstClickX = e.pageX - slider.offsetLeft;

//     alreadyLeftScrolled = slider.scrollLeft;

//     stopTransition();
// });

// slider.addEventListener("mousemove", (e) => {
//     if (!holding) return;

//     const x = e.pageX - slider.offsetLeft;

//     const scrolled = (x - firstClickX) * 2;

//     const prevScrollLeft = slider.scrollLeft;

//     slider.scrollLeft = alreadyLeftScrolled - scrolled;

//     velocity = slider.scrollLeft - prevScrollLeft;
// });

// slider.addEventListener("mouseup", () => {
//     holding = false;
//     startTransition();
// });
// slider.addEventListener("mouseleave", () => {
//     holding = false;
// });

// function startTransition() {
//     stopTransition();

//     rafID = requestAnimationFrame(decreasingTransition);
// }

// function stopTransition() {
//     cancelAnimationFrame(rafID);
// }
// function decreasingTransition() {
//     slider.scrollLeft += velocity;
//     velocity *= 0.95;
//     if (Math.abs(velocity) > 0.5) {
//         rafID = requestAnimationFrame(decreasingTransition);
//     }
// }

// slider.addEventListener("touchstart", (e) => {
//     holding = true;
//     // pageX => la largeur entre mon click et le DOCUMENT
//     firstClickX = e.targetTouches[0].pageX - slider.offsetLeft;

//     alreadyLeftScrolled = slider.scrollLeft;
//     stopTransition();
// });
// slider.addEventListener("touchend", () => {
//     holder = false;
//     startTransition();
// });
// slider.addEventListener("touchmove", (e) => {
//     if (!holding) return;

//     const x = e.targetTouches[0].pageX - slider.offsetLeft;

//     const scrolled = (x - firstClickX) * 2;

//     const prevScrollLeft = slider.scrollLeft;

//     slider.scrollLeft = alreadyLeftScrolled - scrolled;

//     velocity = slider.scrollLeft - prevScrollLeft;
// });

// affichScroll
