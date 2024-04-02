<div id="visitors-filter-popup" dir="<?php echo(is_rtl() ? 'rtl' : 'ltr') ?>" style="display:none;">
    <form action="<?php echo esc_url(admin_url('admin.php')); ?>" method="get" id="wp_statistics_visitors_filter_form">
        <?php wp_nonce_field('wps-visitors-filter-popup', 'wp-statistics-nonce'); ?>
        <input type="hidden" name="page" value="<?php echo esc_attr($pageName); ?>">
        <div id="wps-visitors-filter-form">
            <!-- DO JS -->
        </div>
    </form>
</div>
