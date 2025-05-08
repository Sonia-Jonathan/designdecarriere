<?php
/* Template Name: Landing Page */
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
    <div class="container">
      <div class="logo-group">
        <?php $img = get_field('marc_img'); ?>
        <?php if ($img): ?>
          <img class="logo-round" aria-hidden="true" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php endif; ?>
        <?php $img = get_field('logo_header'); ?>
        <?php if ($img): ?>
          <img class="logo-default" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php endif; ?>
      </div>
      <div class="header-right">
        <nav class="main-nav">
          <?php
          wp_nav_menu([
            'menu' => 'Header Menu',
            'container' => false,
            'menu_class' => '',
            'items_wrap' => '<ul>%3$s</ul>'
          ]);
          ?>
        </nav>
        <div class="cta-container">
          <a href="<?php the_field('lien_bouton_rdv'); ?>" class="btn btn-jaune cta-button">
            <?php the_field('texte_bouton_rdv'); ?> <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </header>



  <!-- MAIN -->
  <main class="landing">

    <section id="pour-qui" class="section-pour-qui">

      <div class="wrapper">
        <div class="intro">
          <h1>
            <?php the_field('titre_pour_qui'); ?>
          </h1>
          <div class="underline-carriere">
            <?php $img = get_field('underline_carriere'); ?>
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
          <div class="arrow-envol">
            <?php $img = get_field('arrow_envol'); ?>
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
          <h3><?php the_field('texte_intro_pour_qui'); ?></h3>
          <div class="visuel">
            <?php $img = get_field('image_femme_pour_qui'); ?>
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>



        <!-- TYPE EPUISEMENT -->

        <div class="types-epuisement">
          <div class="arrow-left-to-right">
            <?php $img = get_field('arrow_left_to_right'); ?>
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
          <p class="fs-18-bold"><?php the_field('titre_types_epuisement'); ?></p>
          <ul>
            <li class="titre-exergue"><?php the_field('etiquette_1'); ?></li>
            <li class="titre-exergue"><?php the_field('etiquette_2'); ?></li>
            <li class="titre-exergue"><?php the_field('etiquette_3'); ?></li>
          </ul>
        </div>

        <div class="stats">
          <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="stat-item">
              <div class="valeur-wrapper">
                <span class="titre-exergue" data-value="<?php the_field("valeur_stat_$i"); ?>">
                  <?php the_field("valeur_stat_$i"); ?>
                </span>
              </div>
              <p class="fs-16-bold"><?php the_field("texte_stat_$i"); ?></p>
              <small class="stat-source"><?php the_field("source_stat_$i"); ?></small>
            </div>
          <?php endfor; ?>

          <div class="curly-arrow">
            <?php $img = get_field('curly_arrow'); ?>
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>


      </div>

      <!-- POUR QUI 2  -->
      <section class="bloc-retravail">

        <h2 class="titre"><?php the_field('titre_bloc_centre'); ?></h2>

        <div class="contenu-bloc">
          <div class="col-gauche">
            <h3><?php the_field('titre_colonne_gauche_1'); ?></h3>
            <p class="fs-16"><?php the_field('texte_colonne_gauche_1'); ?></p>

            <h3><?php the_field('titre_colonne_gauche_2'); ?></h3>
            <p class="fs-16"><?php the_field('texte_colonne_gauche_2'); ?></p>
          </div>

          <div class="col-droite">
            <?php $img = get_field('illu_torsade_portrait'); ?>
            <?php if ($img): ?>
              <img class="illu-torsade-portrait" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
            <?php $img = get_field('image_portrait'); ?>
            <?php if ($img): ?>
              <img class="img-portrait" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>

        <div class="pour-qui-listes">


          <div class="liste-ateliers">
            <?php $img = get_field('illu_arrow_boucle'); ?>
            <?php if ($img): ?>
              <img class="illu-arrow-boucle" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
            <h3><?php the_field('titre_ateliers'); ?></h3>
            <ul>
              <?php foreach (explode("\n", get_field('liste_ateliers')) as $item): ?>
                <li><?php echo esc_html(trim($item)); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="liste-finale">
            <h3><?php the_field('titre_final'); ?></h3>
            <ul>
              <?php foreach (explode("\n", get_field('liste_finale')) as $item): ?>
                <li><?php echo esc_html(trim($item)); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php $img = get_field('arrow_to_bottom'); ?>
            <?php if ($img): ?>
              <img class="arrow-to-bottom" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      </section>
    </section>

    <!-- TEMOIGNAGES -->

    <section id="temoignages" class="section-temoignages">
      <div class="title-section">
        <span class="title"><?php the_field('titre_section'); ?></span>
        <h1 class="subtitle"><?php the_field('sous-titre_section'); ?></h1>
        <?php $img = get_field('arrow_booucle'); ?>
        <?php if ($img): ?>
          <img class="arrow-boucle" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php endif; ?>

      </div>
      <div class="temoignages-background">
        <div class="swiper-container temoignages-swiper">
          <div class="swiper-wrapper">

            <?php
            $args = [
              'post_type' => 'temoignage',
              'posts_per_page' => -1
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()):
              while ($query->have_posts()): $query->the_post();
                $citation = get_field('citation');
                $nom = get_field('nom');
                $photo = get_field('photo_profil');
            ?>
                <div class="swiper-slide temoignage-slide">
                  <div class="temoignage-card">
                    <span class="quote-icon">“</span>
                    <div class="citation">
                      <p><?php echo wpautop(esc_html(get_field('citation'))); ?></p>
                      <div class="temoin">
                        <?php if ($photo): ?>
                          <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($nom); ?>">
                        <?php endif; ?>
                        <p class="fs-16-bold"><?php echo esc_html($nom); ?></p>
                      </div>
                    </div>

                  </div>
                </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

          </div>

          <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
          <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>

        </div>
      </div>

      <div class="temoignage-special">
        <div class="temoignage-special-inner">
          <span class="quote-icon">“</span>
          <?php $img = get_field('photo_profil_avis'); ?>
          <?php if ($img): ?>
            <img class="photo-profil-avis" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          <?php endif; ?>

          <div class="temoin-details">
            <p class="fs-16-bold"><?php the_field('nom_prenom'); ?></p>
            <p class="fs-16-bold"><?php the_field('profession'); ?></p>
            <p class="avis"><?php the_field('avis'); ?></p>
          </div>
        </div>
      </div>

    </section>

    <!-- PROCESSUS -->
    <section id="processus" class="section-processus">

      <div class="processus-wrapper">

        <!-- Colonne Gauche -->

        <div class="processus-left">
          <h3 class="sur-titre"><?php the_field('titre'); ?></h3>
          <h2><?php the_field('sous-titre'); ?></h2>
          <p class="fs-18">
            <?php the_field('description'); ?>
          </p>
          <?php $img = get_field('fleche-boucle'); ?>
          <?php if ($img): ?>
            <img class="arrow-boucle" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          <?php endif; ?>
        </div>

        <!-- Colonne Droite -->
        <div class="processus-right">
          <div class="accordion">

            <?php
            $args = array(
              'post_type' => 'atelier', // 🔥 Ton CPT 'ateliers'
              'posts_per_page' => -1,
              'orderby' => 'menu_order', // 🟰 trie par date de publication
              'order' => 'ASC'     // 🟰 du plus ancien au plus récent
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
              while ($query->have_posts()): $query->the_post();

                $numero = get_field('numero_atelier');
                $sous_titre = get_field('sous_titre');
                $points = get_field('points_principaux');
                $titre_travail = get_field('titre_travail');
                $liste_travail = get_field('liste_travail');
            ?>

                <div class="accordion-item">
                  <div class="accordion-header">
                    <div class="accordion-title">
                      <p class="fs-18-bold num"><?php echo esc_html($numero); ?></p>
                      <p class="fs-18-bold"><?php echo esc_html($sous_titre); ?></p>
                    </div>
                    <div class="accordion-icon">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <?php if ($points): ?>
                      <ul class="fs-18 ">
                        <?php foreach (explode("\n", $points) as $point): ?>
                          <li><i class="fa-solid fa-check"></i> <?php echo esc_html(trim($point)); ?></li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>

                    <div class="travail">
                      <?php if ($titre_travail): ?>
                        <p class="fs-16-bold"><?php echo esc_html($titre_travail); ?></p>
                      <?php endif; ?>

                      <?php if ($liste_travail): ?>
                        <ul class="fs-16 list-travail">
                          <?php
                          foreach (explode("\n", $liste_travail) as $travail):
                            $travail = trim($travail);

                            // Détection
                            $is_sub = strpos($travail, '-') === 0;
                            $is_pink = strpos($travail, '+') === 0;

                            // Nettoyage pour l'affichage (mais on garde le '-' s'il y est)
                            $texte = ltrim($travail, "+");

                            // On ne met la classe 'decale' QUE si le texte ne commence PAS déjà par un "-"
                            $needs_decoration = $is_sub && strpos(ltrim($texte), '-') !== 0;
                          ?>
                            <li class="<?php echo $is_sub ? 'decale' : ''; ?>">
                              <?php if ($is_pink): ?>
                                <span class="pink"><?php echo esc_html($texte); ?></span>
                              <?php else: ?>
                                <?php echo esc_html($texte); ?>
                              <?php endif; ?>
                            </li>
                          <?php endforeach; ?>

                        </ul>
                      <?php endif; ?>
                    </div>



                  </div>
                </div>

            <?php endwhile;
              wp_reset_postdata();
            endif; ?>

          </div>
        </div>

      </div>
    </section>

    <!-- TARIFS -->

    <section id="tarifs" class="section-offres">
      <div class="offres-wrapper">
        <div class="offres-wrapper-title">
          <h3 class="sur-titre"><?php the_field('titre_section_tarifs'); ?></h3>
          <h1><?php the_field('sous_titre_section-tarifs'); ?></h1>
          <?php $img = get_field('ampoule_img'); ?>
          <?php if ($img): ?>
            <img class="ampoule_img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          <?php endif; ?>
        </div>


        <div class="offres-grid">
          <?php
          $args = [
            'post_type' => 'offre',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
          ];
          $query = new WP_Query($args);

          if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();
              $titre = get_field('titre');
              $type = get_field('type');
              $description = get_field('description_offre');
              $prix = get_field('prix');
              $option_paiement = get_field('option_paiement');
              $liste_descriptive = get_field('liste_descriptive');
              $desc_rdv = get_field('desc_rdv');
              $lien = get_field('lien_btn');
              $texte_btn = get_field('texte_btn');
              $couleur = get_field('couleur');
              $label_hover = get_field('label_hover');
          ?>
              <div class="offre-card <?php echo esc_attr($couleur); ?>">


                <div class="offre-contenu">
                  <h4 class="option"><?php the_title(); ?></h4>

                  <h2 class="titre-offre"><?php echo esc_html($titre); ?></h2>
                  <h2 class="type"><?php echo esc_html($type); ?></h2>

                  <h4 class="fs-18-bold description"><?php echo esc_html($description); ?></h4>

                  <h4 class="fs-18-bold prix"><?php echo esc_html($prix); ?> € <span>TTC</span></h4>
                  <p class="fs-16 option-paiement"><?php echo esc_html($option_paiement); ?></p>

                  <?php if ($liste_descriptive): ?>
                    <ul class="liste-descriptive">
                      <?php foreach (explode("\n", $liste_descriptive) as $desc): ?>
                        <?php
                        $desc = trim($desc);
                        if (strpos($desc, '*') === 0) {
                          $desc = ltrim($desc, '* '); // enlève * et espace éventuel
                          echo '<li><i class="fa-solid fa-check"></i> <strong>' . esc_html($desc) . '</strong></li>';
                        } else {
                          echo '<li><i class="fa-solid fa-check"></i> ' . esc_html($desc) . '</li>';
                        }
                        ?>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <p class="desc-rdv"><?php echo esc_html($desc_rdv); ?></p>


                  <?php if ($texte_btn): ?>
                    <a href="<?php echo esc_url($lien); ?>" class="cta-offre btn">
                      <span class="label-default"><?php echo esc_html($texte_btn); ?></span>
                      <span class="label-hover"><?php echo esc_html($label_hover); ?></span>
                      <i class="fa-solid fa-arrow-right"></i></a>
                  <?php endif; ?>
                </div>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

    <!--  LIVRE BLANC -->
    <section id="livre-blanc" class="section-livre-blanc">
      <!-- LIVRE BLANC - REMISE -->
      <?php if (get_field('afficher_remise')): ?>
        <div class="card">
          <div class="card-left">
            <?php $cadeau = get_field('cadeau'); ?>
            <?php if ($cadeau): ?>
              <div class="cadeau-img">
                <img src="<?php echo esc_url($cadeau['url']); ?>" alt="<?php echo esc_attr($cadeau['alt']); ?>">
              </div>
            <?php endif; ?>
            <div class="texte-left">
              <h3 class="sur-titre">
                <?php the_field('titre_remise'); ?>
              </h3>
              <div class="description">
                <?php
                $texte = get_field('remise_pourcentage');

                // Rechercher du texte entre *...* et le mettre dans un <span class="rose">
                $texte = preg_replace('/\*(.*?)\*/', '<span class="rose">$1</span>', $texte);

                echo $texte;
                ?>
              </div>
            </div>
          </div>

          <div class="card-right">
            <div class="bloc-text">
              <?php
              $texte = get_field('description_remise');

              // Séparer le texte par lignes
              $lignes = preg_split('/\r\n|\r|\n/', $texte);

              echo '<p class="fs-16">' . esc_html(trim($lignes[0])) . '</p>'; // Première phrase normale

              if (count($lignes) > 1) {
                echo '<ul>';
                foreach (array_slice($lignes, 1) as $ligne) {
                  $ligne = trim($ligne);
                  if (strpos($ligne, '-') === 0) {
                    // Si la ligne commence par -, on enlève - et on la met dans <li>
                    echo '<li class="fs-16">' . esc_html(ltrim($ligne, '- ')) . '</li>';
                  }
                }
                echo '</ul>';
              }
              ?>

              <?php if (get_field('btn_rdv')):  ?>
                <a href="<?php the_field('lien_btn'); ?>" class="cta-remise btn">
                  <span class="label-default"><?php the_field('btn_rdv'); ?></span>
                  <span class="label-hover"><?php the_field('btn_rdv_hover'); ?></span>
                  <i class="fa-solid fa-arrow-right"></i></a>
              <?php endif; ?>
            </div>


            <?php $etoile = get_field('etoile'); ?>
            <?php if ($etoile): ?>
              <div class="bloc-img">
                <img src="<?php echo esc_url($etoile['url']); ?>" alt="<?php echo esc_attr($etoile['alt']); ?>">
              </div>
            <?php endif; ?>
          </div>


        </div>
        </div>
      <?php endif; ?>


      <!-- LIVRE BLANC - TELECHARGER LIVRE BLANC -->

      <div class="card card-telechargement">
        <div class="card-left">
          <p class="texte-left  ">
            <?php
            $texte = get_field('texte_telecharger_lb');

            // Remplacer ce qui est entre guillemets par un span rose
            $texte = preg_replace('/“(.*?)”/', '“<span class="rose">$1</span>”', $texte);

            echo $texte;
            ?>
          </p>
        </div>

        <div class="card-right">
          <div class="bloc-text">
            <h4 class="fs-16-bold "><?php the_field('titre_sommaire'); ?></h4>

            <?php if (get_field('liste_sommaire')): ?>
              <ul class="liste-sommaire">
                <?php foreach (explode("\n", get_field('liste_sommaire')) as $item): ?>
                  <li class="fs-16"><?php echo esc_html(trim($item)); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>


            <?php if (get_field('btn_envoi_lb')): ?>
              <a href="<?php the_field('lien_btn_envoi_lb'); ?>" class="cta-remise btn">
                <?php the_field('btn_envoi_lb'); ?> <i class="fa-solid fa-arrow-right"></i>
              </a>
            <?php endif; ?>
          </div>

          <div class="bloc-img">
            <?php $illu = get_field('illu_livre_blanc'); ?>
            <?php if ($illu): ?>
              <img src="<?php echo esc_url($illu['url']); ?>" alt="<?php echo esc_attr($illu['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>

    </section>


    <!-- PODCAST -->
    <section id="podcast" class="section-podcast">
      <div class="podcast-wrapper">

        <div class="bloc-gauche">
          <h2 class="titre-exergue"><?php the_field('titre_gauche_podcast'); ?></h2>

          <div class="vignette-podcast">
            <?php $illu = get_field('image_vignette_podcast'); ?>
            <?php if ($illu): ?>
              <img src="<?php echo esc_url($illu['url']); ?>" alt="<?php echo esc_attr($illu['alt']); ?>">
            <?php endif; ?>

            <button class="btn-ecouter">
              <i class="fa-solid fa-play"></i>
              <span class="text"><?php the_field('btn_hover_text'); ?></span>
            </button>

            <div class="hover-vignette">
              <p class="fs-16-bold"><?php the_field('titre_texte_hover_podcast'); ?></p>
            </div>
          </div>


        </div>

        <div class="bloc-droit">
          <h3 class="citation"><?php the_field('grand_titre_citation_podcast'); ?></h3>

          <div class="fs-16">
            <?php the_field('texte_descriptif_podcast'); ?>
          </div>

          <a href="<?php the_field('lien_btn_podcast'); ?>" class="btn btn-jaune">
            <?php the_field('btn_podcast'); ?> <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

      </div>
    </section>



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



  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.temoignages-swiper', {
        slidesPerView: 1,
        spaceBetween: -25,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 2
          },
          1200: {
            slidesPerView: 3
          }
        }
      });
    });

    // ACCORDÉON
    const accordions = document.querySelectorAll('.accordion-item');

    accordions.forEach(item => {
      const content = item.querySelector('.accordion-content');
      const icon = item.querySelector('.accordion-icon i');

      item.addEventListener('click', (e) => {
        // Évite les conflits avec des liens ou boutons internes
        if (e.target.closest('a, button')) return;

        const isOpen = item.classList.contains('active');

        if (isOpen) {
          content.style.maxHeight = content.scrollHeight + 'px';
          content.style.opacity = '1';

          requestAnimationFrame(() => {
            content.style.maxHeight = '0';
            content.style.opacity = '0';
          });

          item.classList.remove('active');
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          content.style.opacity = '1';

          item.classList.add('active');
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        }
      });

      content.addEventListener('transitionend', () => {
        if (item.classList.contains('active')) {
          content.style.maxHeight = 'none';
        }




      });
    });
  </script>



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