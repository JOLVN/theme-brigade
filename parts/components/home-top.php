<!-- HAUT DE LA PAGE D'ACCUEIL -->

<div class="home-top">

    <!-- IMAGE DE FOND -->
    <div class="container-image-background">
    </div>
    <!-- IMAGE DE FOND -->

    <?php
    $image = get_field('background_image');
    if (!empty($image)) : ?>
        <img class="background-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <!-- FLEXBOX DESCRIPTION ET LOGO -->
    <div class="content-section">

        <!-- LOGO -->
        <div class="content-section__logo">
            <?php
            $image = get_field('logo2');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <!-- LOGO -->

        <!-- DESCRIPTION -->
        <div class="content-section-description">

            <!-- TEXTE DE DESCRIPTION  -->
            <div class="content-section-description__text">
                <h3>
                    <?php the_field('description'); ?>
                </h3>
            </div>
            <!-- TEXTE DE DESCRIPTION  -->

            <!-- BOUTON LINK -->
            <div class="content-section-description__button">
                <?php
                $link = get_field('link');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="button-text" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <button type="button" class="btn btn-info">
                            <?php echo esc_html($link_title); ?>
                        </button>
                    </a>
                <?php endif; ?>
            </div>
            <!-- BOUTON LINK -->

        </div>
        <!-- DESCRIPTION -->
        <?php
        $image = get_field('image');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>
    <!-- FLEXBOX DESCRIPTION ET LOGO -->

    <div class="arrow-scroll">
        <svg width="29" height="15" viewBox="0 0 29 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.3597 0.479212C29.1868 1.13916 29.2165 2.23391 28.426 2.92439L15.9975 13.7813C15.6066 14.1227 15.0656 14.3158 14.5 14.3158C13.9344 14.3158 13.3933 14.1227 13.0025 13.7813L0.573964 2.92439C-0.216481 2.23391 -0.186828 1.13916 0.640196 0.479211C1.46722 -0.180739 2.77845 -0.155981 3.56889 0.534508L14.5 10.0833L25.4311 0.53451C26.2216 -0.15598 27.5328 -0.180737 28.3597 0.479212Z" fill="white" />
        </svg>
    </div>



</div>