<?php
/* Template Name: Mentions legales Page */
?>

<!DOCTYPE html>
<html lang="fr">

<?php
/* Template Name: Landing Page */
get_header('landing');
?>



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