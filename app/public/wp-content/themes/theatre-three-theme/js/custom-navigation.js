document.addEventListener("DOMContentLoaded", function() {
    var navItems = document.querySelectorAll(".nav-item");

    navItems.forEach(function(navItem) {
        navItem.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default anchor link behavior

            // Find the next sibling `.sub-links-container` relative to the clicked `.nav-item`
            var submenu = this.nextElementSibling;

            // Check if the clicked `.nav-item`'s submenu is already active
            if (submenu.classList.contains("active")) {
                submenu.classList.remove("active"); // Hide the submenu if it was already visible
            } else {
                // Hide all other submenus before showing the clicked one
                document.querySelectorAll(".sub-links-container.active").forEach(function(activeMenu) {
                    activeMenu.classList.remove("active");
                });
                submenu.classList.add("active"); // Show the submenu for the clicked `.nav-item`
            }
        });
    });
});