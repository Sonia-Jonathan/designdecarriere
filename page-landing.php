<?php
/* Template Name: Landing Page */
?>

<!DOCTYPE html>
<html lang="fr">

<?php
/* Template Name: Landing Page */
get_header('landing');
?>



<!-- MAIN -->
<main class="landing">

  <!-- POUR QUI -->
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
          <div>
            <?php the_field('liste_ateliers'); ?>
          </div>
        </div>

        <div class="liste-finale">
          <h3><?php the_field('titre_final'); ?></h3>
          <div>
            <?php the_field('liste_finale'); ?>
          </div>
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
          <div class="fs-16-bold">
            <p><?php the_field('nom_prenom'); ?></p>
            <p><?php the_field('profession'); ?></p>
          </div>
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
        <div class="description fs-18">
          <?php the_field('description'); ?>
        </div>
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
              $titre_travail = get_field('titre_travail');
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
                  <div class="points-principaux fs-18">
                    <?php the_field('points_principaux'); ?>
                  </div>

                  <div class="travail">
                    <?php if ($titre_travail): ?>
                      <p class="fs-16-bold"><?php echo esc_html($titre_travail); ?></p>
                    <?php endif; ?>

                    <div class="points-travails fs-16 ">
                      <?php the_field('liste_travail'); ?>
                    </div>
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
        <?php $img = get_field('ampoule_img'); ?>

        <?php if ($img): ?>
          <img class="ampoule_img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php endif; ?>
        <h3 class="sur-titre"><?php the_field('titre_section_tarifs'); ?></h3>
        <h1><?php the_field('sous_titre_section_tarifs'); ?></h1>

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
            $texte_btn_mobile = get_field('texte_btn_mobile');
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

                <div class="liste-descriptive ">
                  <?php the_field('liste_descriptive'); ?>
                </div>

                <!-- <?php if ($liste_descriptive): ?>
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
                  <?php endif; ?> -->

                <p class="desc-rdv"><?php echo esc_html($desc_rdv); ?></p>


                <?php if ($texte_btn): ?>
                  <a href="<?php echo esc_url($lien); ?>" class="cta-offre btn">
                    <span class="label-default"><?php echo esc_html($texte_btn); ?></span>
                    <span class="label-mobile"><?php echo esc_html($texte_btn_mobile); ?></span>
                    <span class="label-hover"><?php echo esc_html($label_hover); ?></span>
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>

                  <a href="<?php echo esc_url($lien); ?>" class="cta-offre-mobile">
                    <div class="cta-content">
                      <span class="label-mobile"><?php echo esc_html($texte_btn_mobile); ?></span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </div>
                  </a>
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
  <section id="livre-blanc-section" class="section-livre-blanc">
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
              <?php the_field('remise_pourcentage'); ?>

            </div>
          </div>
        </div>

        <div class="card-right">
          <div class="bloc-text fs-16">
            <?php the_field('description_remise'); ?>


            <?php if (get_field('btn_rdv')):  ?>
              <a href="<?php the_field('lien_btn'); ?>" class="cta-remise btn">
                <span class="label-default"><?php the_field('btn_rdv'); ?></span>
                <span class="label-hover"><?php the_field('btn_rdv_hover'); ?></span>
                <i class="fa-solid fa-arrow-right"></i></a>

              <a href="<?php the_field('lien_btn'); ?>" class="cta-remise-offre">
                <div class="cta-content">
                  <span class="label-mobile"><?php the_field('btn_rdv_mobile'); ?></span>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </a>



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
    <section id="livre-blanc" class="card card-telechargement">
      <div class="card-left">


        <h3 class="texte-left">
          <?php the_field('texte_telecharger_lb'); ?>

        </h3>
      </div>

      <div class="card-right">
        <div class="bloc-text">
          <div class="fs-16">
            <h4 class="fs-16-bold "><?php the_field('titre_sommaire'); ?></h4>
            <?php the_field('liste_sommaire'); ?>
          </div>
          <?php if (get_field('btn_envoi_lb')): ?>
            <a id="ouvrir-popup-livre-blanc" href="<?php the_field('lien_btn_envoi_lb'); ?>" class="cta-remise btn">
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
    </section>

  </section>


  <!-- PODCAST -->
  <section id="podcast" class="section-podcast">
    <div class="podcast-wrapper">

      <div class="bloc-gauche">
        <h2 class="titre-exergue"><?php the_field('titre_gauche_podcast'); ?></h2>

        <a href="<?php the_field('lien_btn_podcast'); ?>">
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
        </a>

      </div>

      <div class="bloc-droit">
        <h3 class="citation"><?php the_field('grand_titre_citation_podcast'); ?></h3>

        <div class="fs-16">
          <?php the_field('texte_descriptif_podcast'); ?>
        </div>
        <!-- 
          <a href="<?php the_field('lien_btn_podcast'); ?>" class="btn btn-jaune">
            <?php the_field('btn_podcast'); ?> <i class="fa-solid fa-arrow-right"></i>
          </a> -->
      </div>

    </div>
  </section>

</main>

<!-- BOUTON FIXE EN BAS DE PAGE -->


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


<div class="btn btn-fixe-mobile">
  <a href="<?php the_field('lien_bouton_rdv'); ?>"><?php the_field('texte_btn_rdv_mobile'); ?> <i class="fa-solid fa-arrow-right"></i></a>
</div>

<!-- POPUP -->
<div id="popup-livre-blanc" >
  <div >
    <?php echo do_shortcode('[mailpoet_form id="2"]'); ?>
  </div>
</div>




<?php wp_footer(); ?>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.temoignages-swiper', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        0: {
          spaceBetween: 20,
          autoHeight: true,

          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1
        },
        1025: {
          slidesPerView: 2,
          spaceBetween: 50,
        },

        1240: {
          slidesPerView: 2,
          spaceBetween: 40,
        },

        1440: {
          spaceBetween: -25,

          slidesPerView: 3
        },


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



<!-- SCRIPT POPUP -->



<script>
document.addEventListener("DOMContentLoaded", function () {
  const trigger = document.getElementById("ouvrir-popup-livre-blanc");
  const popup = document.getElementById("popup-livre-blanc");
  const close = document.getElementById("fermer-popup-livre-blanc");

  if (trigger && popup) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      popup.style.display = "block";
      popup.style.zIndex = "9999";
    });
  }

  if (close && popup) {
    close.addEventListener("click", function (e) {
      e.preventDefault();
      popup.style.display = "none";
    });
  }
});
</script>




</body>

</html>