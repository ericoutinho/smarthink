<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage smarthink
 * @since smarthink 1.0
 */

?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <span>Smarthink</span> &copy; 2022 &bullet; Todos os diretos reservados
                </div>
                <div class="col">
                    <img src="<?= get_template_directory_uri(); ?>/assets/Smarthink_logo_branca.svg" alt="Smarthink">
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>