jQuery(document).ready(function ($) {
  // Toggle sub-menus on nav item click
  $('.nav-item > a').click(function (event) {
    event.preventDefault(); // Prevent following the link

    // Get the next sibling sub-menu
    var submenu = $(this).next('.sub-links');

    // Check if the submenu is currently displayed
    if (submenu.is(':hidden')) {
      // Close other sub-menus
      $('.sub-links').slideUp().css('display', 'none');

      // Show this submenu with flex
      submenu.slideDown(function () {
        $(this).css('display', 'flex');
      });
    } else {
      // If it is displayed, slide it up
      submenu.slideUp();
    }
  });

  // Close all sub-menus if clicking outside of nav
  $(document).click(function (event) {
    if (!$(event.target).closest('.nav-item').length) {
      $('.sub-links').slideUp().css('display', 'none');
    }
  });
});