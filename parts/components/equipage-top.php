<div class="page-equipage">

    <!-- HAUT DE LA PAGE EQUIPAGE -->

    <div class="top-equipage">

        <!-- CONTENU PAGE EQUIPAGE -->
        <div class="top-equipage__content wrapper row">

            <!-- COTÉ GAUCHE -> INFORMATIONS -->
            <div class="informations col">
                <div class="large-title element row">
                    <div class="titles-custom col">
                        <h1 class="title-custom"><?php the_title(); ?></h1>
                        <div class="reflect-custom"><?php the_title(); ?></div>
                    </div>
                    <div class="line-svg col">
                        <svg width="135" height="4" viewBox="0 0 135 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="135" height="4" fill="#017B82"/>
                        </svg>
                    </div>
                </div>

                <div class="description element">
                    <h2>
                    <?php the_field('titre_description'); ?>
                    </h2>
                </div>

                <div class="description element">

                    <?php the_field('description_groupe'); ?>
                </div>

                <div class="description element">
                    <?php
                    $link = get_field('link_equipage');
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
            </div>
            <!-- COTÉ GAUCHE -> INFORMATIONS -->

            <!-- COTÉ DROIT -> PHOTO DU GROUPE -->
            <div class="image-groupe col">
                <?php
                $image = get_field('photo_equipage');
                if (!empty($image)) : ?>
                    <img class="photo-equipage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>

        </div>

    </div>

