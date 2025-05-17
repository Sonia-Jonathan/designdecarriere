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
    // Vérifie si l’objet contient "livre blanc"
    if (strpos(strtolower($email['subject']), 'livre blanc') !== false) {
        // Récupère le post de type ressource avec la case cochée
        $args = [
            'post_type' => 'ressource',
            'meta_query' => [
                [
                    'key' => 'envoyer_dans_mailpoet',
                    'value' => '1'
                ]
            ],
            'posts_per_page' => 1
        ];

        $posts = get_posts($args);
        if (!empty($posts)) {
            $pdf_url = get_field('fichier_joint', $posts[0]->ID); // URL ACF
            if ($pdf_url) {
                $upload_dir = wp_upload_dir(); // plus fiable pour extraire le chemin local
                $pdf_path = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $pdf_url);
                if (file_exists($pdf_path)) {
                    $attachments[] = $pdf_path;
                }
            }
        }
    }

    return $attachments;
}, 10, 3);

add_filter('show_admin_bar', '__return_false');
