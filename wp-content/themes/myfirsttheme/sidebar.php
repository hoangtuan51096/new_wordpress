<aside>
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>
        <p>Add widgets to the sidebar in the Widgets section of the WordPress admin.</p>
    <?php endif; ?>
</aside>
