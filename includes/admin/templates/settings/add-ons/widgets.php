<?php
$isWidgetsActive = WP_STATISTICS\Helper::isAddOnActive('widgets');
?>
<?php if (!$isWidgetsActive) : ?>
    <div class="wps-premium-feature">
        <div>
            <h1><?php esc_html_e('This feature is currently restricted in your current version.', 'wp-statistics'); ?></h1>
            <p><?php esc_html_e('Unlock premium features to gain a deeper insight into your website.', 'wp-statistics'); ?></p>
        </div>
        <a target="_blank" class="button button-primary" href="<?php echo esc_url(WP_STATISTICS_SITE_URL . '/product/wp-statistics-widgets/?utm_source=wp-statistics&utm_medium=link&utm_campaign=plugin-settings'); ?>"><?php esc_html_e('Upgrade Now', 'wp-statistics') ?></a>
    </div>
<?php endif; ?>

    <div class="postbox">
        <table class="form-table <?php echo !$isWidgetsActive ? 'form-table--preview' : '' ?>">
            <tbody>
            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php esc_html_e('Widget Cache Duration', 'wp-statistics'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="wps_addon_settings[widgets][cache_life]"><?php esc_html_e('Refresh Every', 'wp-statistics'); ?></label>
                </th>

                <td>
                    <select name="wps_addon_settings[widgets][cache_life]" id="wps_addon_settings[widgets][cache_life]" style="padding: 12px 24px 12px 14px !important;">
                        <?php foreach (array_combine(range(1, 24), range(1, 24)) as $key => $value) { ?>
                            <option value="<?php esc_attr_e($value); ?>" <?php selected(WP_STATISTICS\Option::getByAddon('cache_life', 'widgets'), $value); ?>><?php esc_html_e($value); ?></option>
                        <?php } ?>
                    </select>
                    <?php esc_html_e('hour(s)', 'wp-statistics'); ?>
                    <p class="description"><?php esc_html_e('Set the time interval for refreshing the statistics displayed in widgets. After the chosen period, fresh data will be fetched and displayed.', 'wp-statistics'); ?></p>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="postbox">
        <table class="form-table <?php echo !$isWidgetsActive ? 'form-table--preview' : '' ?>">
            <tbody>
            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php esc_html_e('Widget Design Customization', 'wp-statistics'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row">
                    <label for="wps_addon_settings[widgets][disable_styles]"><?php esc_html_e('Use Default Widget Styling', 'wp-statistics'); ?></label>
                </th>

                <td>
                    <input id="wps_addon_settings[widgets][disable_styles]" name="wps_addon_settings[widgets][disable_styles]" type="checkbox" value="1" <?php checked(WP_STATISTICS\Option::getByAddon('disable_styles', 'widgets')) ?>>
                    <label for="wps_addon_settings[widgets][disable_styles]"><?php esc_html_e('Enable', 'wp-statistics'); ?></label>
                    <p class="description"><?php esc_html_e('Uncheck to allow theme or custom styles to determine widget appearance.', 'wp-statistics'); ?></p>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

<?php
if ($isWidgetsActive) {
    submit_button(__('Update', 'wp-statistics'), 'primary', 'submit', '', array('OnClick' => "var wpsCurrentTab = getElementById('wps_current_tab'); wpsCurrentTab.value='widgets-settings'"));
}
?>