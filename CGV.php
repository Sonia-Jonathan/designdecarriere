<?php
/* Template Name: CGV Page */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- HEADER -->
    <header class="main-header">
    <div class="progress-wrapper"></div>
    <div class="progress-bar"></div>


    <div class="container ">
      <div class="logo-group">
        <?php $img = get_field('marc_img'); ?>
        <?php if ($img): ?>
          <img class="logo-round" aria-hidden="true" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php endif; ?>
        <?php $img = get_field('logo_header'); ?>
        <?php if ($img): ?>
          <a href="/"><img class="logo-default" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>"></a>
        <?php endif; ?>
      </div>

      <button class="burger-menu" aria-label="Ouvrir le menu">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="header-right">
        <nav class="main-nav">
          <ul>

            <?php
            wp_nav_menu([
              'menu' => 'Header Menu',
              'container' => false,
              'menu_class' => '',
              'items_wrap' => '<li>%3$s</li>'
            ]);
            ?>

            <li>
              <a class="btn btn-jaune cta-button" href="<?php the_field('lien_bouton_rdv'); ?>">
                <?php the_field('texte_bouton_rdv'); ?> <i class="fa-solid fa-arrow-right"></i>
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </div>
  </header>



    <!-- MAIN -->
    <main class="cgv">

        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>




    </main>


    <footer class="footer-site">
        <div class="footer-wrapper">
            <div class="footer-column">
                <?php
                wp_nav_menu([
                    'menu' => 'Footer Colonne 1',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                ]);
                ?>
            </div>
            <div class="footer-column">
                <?php
                wp_nav_menu([
                    'menu' => 'Footer Colonne 2',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                ]);
                ?>
            </div>
            <div class="footer-column">
                <?php
                wp_nav_menu([
                    'menu' => 'Footer Colonne 3',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                ]);
                ?>
            </div>
        </div>
    </footer>







    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.main-header');
            const progressBar = document.querySelector('.progress-bar');
            const progressWrapper = document.querySelector('.progress-wrapper');
            const scrollTop = window.scrollY;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const progress = (scrollTop / docHeight) * 100;

            // Seuil d'activation du scroll
            const SCROLL_THRESHOLD = 50;

            if (scrollTop > SCROLL_THRESHOLD) {
                header.classList.add('scrolled');
                progressWrapper.style.display = 'block';
            } else {
                header.classList.remove('scrolled');
                progressWrapper.style.display = 'none';
            }

            // Mise à jour de la barre
            progressBar.style.width = progress + '%';
        });
    </script>






</body>

</html>