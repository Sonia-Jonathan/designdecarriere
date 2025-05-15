<?php

// 🔹 1. Enregistrer le menu de navigation personnalisé

function hello_child_setup()
{
    register_nav_menus([
        'header_menu' => __('Menu principal du header', 'hello-child')
    ]);
}
add_action('after_setup_theme', 'hello_child_setup');

function hello_child_register_footer_menus()
{
    register_nav_menus([
        'footer_colonne_1' => __('Footer Colonne 1', 'hello-child'),
        'footer_colonne_2' => __('Footer Colonne 2', 'hello-child'),
        'footer_colonne_3' => __('Footer Colonne 3', 'hello-child'),
    ]);
}
add_action('after_setup_theme', 'hello_child_register_footer_menus');

// 🔹 2. Charger landing.css uniquement sur la landing page
function hello_child_enqueue_assets()
{
    if (is_page_template('page-landing.php')) {

        wp_enqueue_style('landing-css', get_stylesheet_directory_uri() . '/css/landing.css');
        wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], null);

        // JS de Swiper (chargé dans le footer)
        wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
    }
}
add_action('wp_enqueue_scripts', 'hello_child_enqueue_assets');

function ajouter_meta_robots()
{
    // Si l'utilisateur est connecté en tant qu'admin, on laisse indexer
    if (current_user_can('administrator')) {
        return;
    }

    echo '<meta name="robots" content="noindex, nofollow">' . "\n";
}
add_action('wp_head', 'ajouter_meta_robots');

// mailpoet

add_filter('mailpoet_automation_email_attachments', function($attachments, $email, $subscriber) {
    // On vérifie que c’est bien l’automatisation du livre blanc
    if (strpos($email['subject'], 'livre blanc') !== false) {
        // On récupère le CPT "ressource" marqué à envoyer
        $args = array(
            'post_type' => 'ressource',
            'meta_query' => array(
                array(
                    'key' => 'envoyer_dans_mailpoet',
                    'value' => '1'
                )
            ),
            'posts_per_page' => 1
        );

        $posts = get_posts($args);

        if (!empty($posts)) {
            $pdf_url = get_field('fichier_joint', $posts[0]->ID); // ACF champ fichier
            if ($pdf_url) {
                $pdf_path = ABSPATH . str_replace(site_url() . '/', '', $pdf_url);
                if (file_exists($pdf_path)) {
                    $attachments[] = $pdf_path;
                }
            }
        }
    }

    return $attachments;
}, 10, 3);
