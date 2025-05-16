<?php
/**
 * The sidebar template.
 * Displays widgets in the sidebar area.
 */
if (!is_active_sidebar('sidebar-1')) {
    return; // Exit if no widgets are active
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>