<?php

/**
 * Template for benhabsxv
 */
?>



<div class="page-membre">


    <!-- DESCRIPTION MEMBRE -->
    <div class="membre-description">

        <div class="membre-description__content container row">

            <!-- COTÉ GAUCHE -> PHOTO MEMBRE ET POCHETTE -->
            <div class="col">
                <div class="membre-images">
                    <div class="photo-membre">
                        <?php
                        $image = get_field('photo_benhabsxv_membre');
                        if (!empty($image)) : ?>
                            <img id="photo-equipage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="pochette">
                        <?php
                        $image = get_field('pochette_plastique', 'options');
                        if (!empty($image)) : ?>
                            <img id="pochette-plastique" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- COTÉ GAUCHE -> PHOTO MEMBRE ET POCHETTE -->

            <!-- COTÉ DROIT -> DESCRIPTION MEMBRE -->
            <div class="membre-description col">
                <div class="element">
                    <div class="titles-custom">
                        <h1 class="title-custom">BENHABSXV</h1>
                        <div class="reflect-custom">BENHABSXV</div>
                    </div>
                    <h2>
                        <?php the_field('surnom_benhabsxv_membre'); ?>
                    </h2>
                </div>
                <div class="element">
                    <h3>
                        <?php the_field('description_benhabsxv_membre'); ?>
                    </h3>
                </div>
            </div>
            <!-- COTÉ DROIT -> DESCRIPTION MEMBRE -->
        </div>

    </div>
    <!-- DESCRIPTION MEMBRE -->

    <!-- GALLERIE PHOTO MEMBRE -->
    <div class="container">
        <div class="membre-gallerie">
            <div class="row">
                <div class="col">
                    <?php 
                    $image = get_field('photo1_benhabsxv');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php 
                    $image = get_field('photo2_benhabsxv');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php 
                    $image = get_field('photo3_benhabsxv');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php 
                    $image = get_field('photo4_benhabsxv');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>

