<?php
/**
 * Plugin Name: Delayed Page Display Without Scroll
 * Description: Delays the visibility of the entire page until all DOM content is fully loaded, and prevents automatic scrolling to iframe.
 */

function delayed_page_display_no_scroll_script() {
    ?>
    <style>
        /* Initially hide the entire body of the page */
        html {
            visibility: hidden;
        }
    </style>
    <script type="text/javascript">
        window.addEventListener('load', function() {
            // Once the window is fully loaded, make the page visible
            document.documentElement.style.visibility = 'visible';
            
            // Prevent automatic scrolling by setting scroll position to top
            window.scrollTo(0, 0);
        });
    </script>
    <?php
}

add_action('wp_head', 'delayed_page_display_no_scroll_script');
?>
