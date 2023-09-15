document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector(".hamburger");
    const navList = document.querySelector(".nav-list");

    hamburger.addEventListener("click", function() {
        if (navList.style.display === "none" || navList.style.display === "") {
            navList.style.display = "flex";
        } else {
            navList.style.display = "none";
        }
    });

    const navItems = document.querySelectorAll(".nav-item");
    navItems.forEach(function(navItem) {
        navItem.addEventListener("click", function(event) {
            const subLinks = navItem.querySelector(".sub-links");
            if (subLinks) {
                event.preventDefault();
                if (subLinks.classList.contains("active")) {
                    subLinks.classList.remove("active");
                } else {
                    document.querySelectorAll(".sub-links.active").forEach(function(activeMenu) {
                        activeMenu.classList.remove("active");
                    });
                    subLinks.classList.add("active");
                }
            }
        });
    });
});
