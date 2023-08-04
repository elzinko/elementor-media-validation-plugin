<?php

/**
 * Pour utiliser les options dans le code, il est possible d'utiliser :
 * - $options = get_option('myplugin_settings');
 * - $consumer_key = $options['myplugin_consumer_key'];
 * - $consumer_secret = $options['myplugin_consumer_secret'];
 */

// Add settings page under the main plugin menu
function add_settings_page()
{
    add_submenu_page(
        'media-validator',
        'Paramètres API Shutterstock', // Page title
        'Settings', // Menu title
        'manage_options', // Capability
        'shutterstock_settings', // Menu slug
        'render_settings_page' // Render function
    );
}
add_action('admin_menu', 'add_settings_page');

// Render the settings page
function render_settings_page()
{
?>
<div class="wrap">
    <h2>Paramètres API Shutterstock</h2>

    <form method="post" action="options.php">
        <?php
            settings_fields('shutterstock-api-settings');
            do_settings_sections('shutterstock-api-settings');
            ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Clé consommateur</th>
                <td><input type="text" name="consumer_key"
                        value="<?php echo esc_attr(get_option('consumer_key')); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Code secret du consommateur</th>
                <td><input type="text" name="consumer_secret"
                        value="<?php echo esc_attr(get_option('consumer_secret')); ?>" /></td>
            </tr>
        </table>

        <?php submit_button(); ?>
    </form>
</div>
<?php
}

// Register the settings
function register_mysettings()
{
    register_setting('shutterstock-api-settings', 'consumer_key');
    register_setting('shutterstock-api-settings', 'consumer_secret');
}
add_action('admin_init', 'register_mysettings');