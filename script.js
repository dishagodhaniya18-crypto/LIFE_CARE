/* =========================
   MOBILE MENU
========================= */

function toggleMenu() {

    const nav = document.getElementById("navLinks");

    nav.classList.toggle("active");

}

const menuBtn = document.getElementById("menuBtn");
const navLinks = document.getElementById("navLinks");

menuBtn.addEventListener("click", () => {

    navLinks.classList.toggle("active");

});


/* Close mobile menu after clicking a link */

document.querySelectorAll(".nav-links a").forEach(link => {

    link.addEventListener("click", () => {

        navLinks.classList.remove("active");

    });

});


/* =========================
   COUNTER ANIMATION
========================= */

const counters = document.querySelectorAll(".counter");

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            const counter = entry.target;

            const target = Number(counter.dataset.target);

            let current = 0;

            const increment = target / 100;

            const updateCounter = () => {

                current += increment;

                if (current < target) {

                    counter.textContent =
                        Math.ceil(current).toLocaleString();

                    requestAnimationFrame(updateCounter);

                } else {

                    counter.textContent =
                        target.toLocaleString();

                }

            };

            updateCounter();

            observer.unobserve(counter);
        }

    });

});


counters.forEach(counter => {

    observer.observe(counter);

});


/* =========================
   VOLUNTEER FORM
========================= */

const volunteerForm =
    document.getElementById("volunteerForm");

volunteerForm.addEventListener("submit", function(event) {

    event.preventDefault();

    alert(
        "Thank you for registering as a LifeCare volunteer! 🌱"
    );

    volunteerForm.reset();

});