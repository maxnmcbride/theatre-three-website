<?php
/**
 * Plugin Name: Delayed Page Display Without Scroll
 * Description: Delays the visibility of the entire page until all DOM content is fully loaded, and prevents automatic scrolling to iframe.
 */
function delayed_page_display_no_scroll_script()
{
    ?>
    <style>
        html {
            visibility: hidden;
        }
    </style>
    <script type="text/javascript">
        window.addEventListener('load', function () {
            document.documentElement.style.visibility = 'visible';
            window.scrollTo(0, 0);
        });
    </script>
    <?php
}

add_action('wp_head', 'delayed_page_display_no_scroll_script');
?>