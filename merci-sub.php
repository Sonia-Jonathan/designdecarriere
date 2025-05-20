<?php
/* Template Name: ThanksToSub Page*/
?>

<!DOCTYPE html>
<html lang="fr">





    <!-- MAIN -->
    <main class="thanks-sub">

        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>




    </main>

</body>

</html>