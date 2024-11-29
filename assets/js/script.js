document.addEventListener("DOMContentLoaded", () => {
    const tipsHeaders = document.querySelectorAll(".tips-header");

    tipsHeaders.forEach(header => {
        header.addEventListener("click", () => {
            const currentlyOpen = document.querySelector(".tips-content.open");
            const content = header.nextElementSibling;

            if (currentlyOpen && currentlyOpen !== content) {
                currentlyOpen.classList.remove("open");
                currentlyOpen.style.display = "none";
            }

            if (content.style.display === "block") {
                content.style.display = "none";
                content.classList.remove("open");
            } else {
                content.style.display = "block";
                content.classList.add("open");
            }
        });
    });
});
