document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger");
    const mobileMenu = document.querySelector(".mobile-menu");

    hamburgerBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });
});

// Function to start counters when user scrolls to success-metrics section

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-button");

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const filterValue = button.textContent.toLowerCase();

            const portfolioItems = document.querySelectorAll(".portfolio-item");

            portfolioItems.forEach((item) => {
                const itemCategories = item
                    .querySelector("span")
                    .textContent.toLowerCase();

                if (
                    filterValue === "all" ||
                    itemCategories.includes(filterValue)
                ) {
                    item.classList.remove("hidden");
                } else {
                    item.classList.add("hidden");
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        const updateCount = () => {
            const target = +counter.getAttribute("data-target-value");
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetSection = document.querySelector(targetId);
        if (targetSection) {
            const offset = 88;
            const targetPosition =
                targetSection.getBoundingClientRect().top +
                window.scrollY -
                offset;

            window.scrollTo({
                top: targetPosition,
                behavior: "smooth",
            });
        }
    });
});
