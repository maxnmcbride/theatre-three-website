// document.addEventListener("DOMContentLoaded", function() {
//     const hamburger = document.querySelector(".hamburger");
//     const navList = document.querySelector(".nav-list");

//     hamburger.addEventListener("click", function() {
//         if (navList.style.display === "none" || navList.style.display === "") {
//             navList.style.display = "flex";
//         } else {
//             navList.style.display = "none";
//         }
//     });

//     const navItems = document.querySelectorAll(".nav-item");
//     navItems.forEach(function(navItem) {
//         navItem.addEventListener("click", function(event) {
//             const subLinks = navItem.querySelector(".sub-links");
//             if (subLinks) {
//                 event.preventDefault();
//                 if (subLinks.classList.contains("active")) {
//                     subLinks.classList.remove("active");
//                 } else {
//                     document.querySelectorAll(".sub-links.active").forEach(function(activeMenu) {
//                         activeMenu.classList.remove("active");
//                     });
//                     subLinks.classList.add("active");
//                 }
//             }
//         });
//     });
// });

document.addEventListener("DOMContentLoaded", function() {
    var hamburger = document.querySelector(".hamburger");
    var navList = document.querySelector(".nav-list");

    hamburger.addEventListener("click", function() {
        // Toggle the 'active' class instead of directly changing the style
        navList.classList.toggle("active");
    });

    var navItems = document.querySelectorAll(".nav-item");
    navItems.forEach(function(navItem) {
        navItem.addEventListener("click", function(event) {
            event.stopPropagation();
            var submenu = navItem.querySelector(".sub-links");
            
            if (submenu.classList.contains("active")) {
                submenu.classList.remove("active");
            } else {
                // Close other sub-menus
                var activeMenus = document.querySelectorAll(".sub-links.active");
                activeMenus.forEach(function(activeMenu) {
                    activeMenu.classList.remove("active");
                });
                submenu.classList.add("active");
            }
        });
    });

    // Clicking anywhere outside of the nav-items will close all sub-menus
    document.addEventListener("click", function(event) {
        if (!event.target.closest(".nav-item")) {
            var subMenus = document.querySelectorAll(".sub-links");
            subMenus.forEach(function(menu) {
                menu.classList.remove("active");
            });
        }
    });

    // Prevent clicks within the submenu from closing it
    document.querySelectorAll(".sub-links").forEach(function(menu) {
        menu.addEventListener("click", function(event) {
            event.stopPropagation();
        });
    });
});