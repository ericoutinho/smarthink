<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage smarthink
 * @since smarthink 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.png" type="image/png">

    <!-- Primary Meta Tags -->
    <title>Smarthink - Somos colaborativos, parceiros e criativos.</title>
    <meta name="title" content="Smarthink - Somos colaborativos, parceiros e criativos.">
    <meta name="description" content="Uma Startup com projetos inovadores e disruptivos, que colabora com o crescimento e a viabilidade de outras Startups.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Smarthink - Somos colaborativos, parceiros e criativos.">
    <meta property="og:description" content="Uma Startup com projetos inovadores e disruptivos, que colabora com o crescimento e a viabilidade de outras Startups.">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/smarthink-meta-1200x628.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Smarthink - Somos colaborativos, parceiros e criativos.">
    <meta property="twitter:description" content="Uma Startup com projetos inovadores e disruptivos, que colabora com o crescimento e a viabilidade de outras Startups.">
    <meta property="twitter:image" content="<?= get_template_directory_uri(); ?>/assets/smarthink-meta-1200x628.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/styles/main.css?v=<?=wp_get_theme()->get('Version')?>">
    <script src="<?= get_template_directory_uri(); ?>/scripts/main.js" defer></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    
    <header id="home">
        <div class="container">
            <nav class="menu">
                <img class="menu-brand" src="<?= get_template_directory_uri(); ?>/assets/Smarthink_logo.svg" alt="Logomarca Smarthink">
                <button class="menu-button"><i class="fa-solid fa-bars"></i></button>
                <ul class="menu-links">
                    <li><a href="#home">Início</a></li>
                    <li><a href="#quem-somos">Quem somos</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#parceiros">Parceiros</a></li>
                    <li><a href="#contato">Contato</a></li>

                    <li>
                        <ul class="menu-links-social">
                            <li><a target="_blank" aria-label="Instagram" href="https://www.instagram.com/smarthink.tec"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" aria-label="Facebook" href="https://www.facebook.com/smarthink.tec "><i class="fab fa-facebook"></i></a></li>
                            <li><a target="_blank" aria-label="Youtube" href="https://www.youtube.com/channel/UCJQ4xwDNZ24_eMX_RVq1cCg"><i class="fab fa-youtube"></i></a></li>
                            <li><a target="_blank" aria-label="Whatsapp" href="https://wa.me/5527992688664"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>