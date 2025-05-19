<?php
/* Template Name: ThanksToSub Page*/
?>

<!DOCTYPE html>
<html lang="fr">

<?php
/* Template Name: Landing Page */
get_header('landing');
?>



    <!-- MAIN -->
    <main class="thanks-sub">

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













</body>

</html>