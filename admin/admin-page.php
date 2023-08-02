<?php

/** 
 * Ajouter la page d'administration au menu 
 * @return void
 */

function media_info_admin_page()
{
    add_menu_page('Media Validator', 'Media Validator', 'manage_options', 'media-info-tracker', 'display_media_info_page');
}

add_action('admin_menu', 'media_info_admin_page');

// Afficher la page d'administration
function display_media_info_page()
{

    $elementor_pages = get_elementor_posts();

    echo '<h1>Elementor Media Validation Plugin</h1>';
    echo '<table>';

    echo '<thead>';
    echo '<tr>';
    echo '<th>Page</th>';
    echo '<th>Bloc</th>';
    echo '<th>URL</th>';
    echo '<th>Provenance</th>';
    echo '</tr>';
    echo '</thead>';

    echo '<tbody>';
    foreach ($elementor_pages as $page) {

        $elementor_page_data = get_elementor_data($page->ID);

        foreach ($elementor_page_data as $section) {

            $bloc_name = get_bloc_name_from_section($section);

            $images = find_images_in_section($section);

            foreach ($images as $image) {

                $media_info = array(
                    'page' => $page->post_title,
                    'bloc' => $bloc_name,
                    'url' => $image['url'],
                    'provenance' => 'Elementor'
                );

                echo '<tr>';
                echo '<td>' . esc_html($media_info['page']) . '</td>';
                echo '<td>' . esc_html($media_info['bloc']) . '</td>';
                echo '<td><a href="' . esc_url($media_info['url']) . '">' . esc_html($media_info['url']) . '</a></td>';
                echo '<td>' . esc_html($image['format']) . '</td>';
                echo '<td><a href="' . esc_url($image['url']) . '">' . esc_html($image['description']) . '</a></td>';
                echo '<td>' . esc_html($media_info['provenance']) . '</td>';
                echo '</tr>';
            }
        }
    }
    echo '</tbody>';

    echo '</table>';


    // show_all_wp_media();
}
