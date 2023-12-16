jQuery(document).ready(function($) {
    // Prevent the default action on click
    $('.nav-item > a').click(function(event) {
      event.preventDefault();
  
      // Close all open sub-menus
      $('.sub-links').not($(this).next()).slideUp();
  
      // Toggle the next submenu
      $(this).next('.sub-links').slideToggle();
    });
  
    // Close sub-menu when clicking anywhere else on the document
    $(document).click(function(event) {
      if (!$(event.target).closest('.nav-item').length) {
        $('.sub-links').slideUp();
      }
    });
  });