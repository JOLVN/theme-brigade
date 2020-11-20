    <!-- SECTiON MEMBRES DE LA PAGE EQUIPAGE -->
    <div class="equipage-membres container">


        <!-- DLANIGHT -->
        <div class="membre membre-left row">

            <!-- COTÉ GAUCHE -> IMAGE ET POCHETTE PLASTIQUE -->
            <div class="left col">
            <div class="membre-images">
                <div class="photo-membre">
                    <?php
                    $image = get_field('photo_dlanight');
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
                    <h1 class="nom-membre-pochette">DLANIGHT</h1>
                </div>
            </div>
            </div>
            <!-- COTÉ GAUCHE -> IMAGE ET POCHETTE PLASTIQUE -->

            <!-- COTÉ DROIT -> DESCRIPTION DU MEMBRE -->
            <div class="membre-description col">
                <div class="element">
                    <h1>DLANIGHT</h1>
                    <h2>
                        <?php the_field('surnom_dlanight'); ?>
                    </h2>
                </div>
                <div class="element">
                    <h3>
                        <?php the_field('description_dlanight'); ?>
                    </h3>
                </div>
                <div class="element">
                    <a href="#">
                        <div class="btn btn-custom">
                            Voir plus
                        </div>
                    </a>
                </div>
            </div>
            <!-- COTÉ DROIT -> DESCRIPTION DU MEMBRE -->

        </div>
        <!-- DLANIGHT -->


        <!-- BENHABSXV -->
        <div class="membre membre-right row">

            <!-- COTÉ GAUCHE -> DESCRIPTION DU MEMBRE -->
            <div class="membre-description col">
                <div class="element">
                    <h1>BENHABSXV</h1>
                    <h2>
                        <?php the_field('surnom_benhabsxv'); ?>
                    </h2>
                </div>
                <div class="element">
                    <h3>
                        <?php the_field('description_benhabsxv'); ?>
                    </h3>
                </div>
                <div class="element">
                    <a href="http://0.0.0.0:8181/index.php/benhabsxv/">
                        <div class="btn btn-custom">
                            Voir plus
                        </div>
                    </a>
                </div>
            </div>
            <!-- COTÉ GAUCHE -> DESCRIPTION DU MEMBRE -->

            <!-- COTÉ DROIT -> IMAGE ET POCHETTE PLASTIQUE -->
            <div class="left col">
            <div class="membre-images">
                <div class="photo-membre">
                    <?php
                    $image = get_field('photo_benhabsxv');
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
                    <h1 class="nom-membre-pochette" id="nom-benhabsxv">BENHABSXV</h1>
                </div>
            </div>
            </diV>
            <!-- COTÉ DROIT -> IMAGE ET POCHETTE PLASTIQUE -->

        </div>
        <!-- BENHABSXV -->


        <!-- KAMS -->
        <div class="membre membre-left row">

            <!-- COTÉ GAUCHE -> IMAGE ET POCHETTE PLASTIQUE -->
            <div class="left col">
            <div class="membre-images">
                <div class="photo-membre">
                    <?php
                    $image = get_field('photo_kams');
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
                    <h1 class="nom-membre-pochette" id="nom-kams">KAMS</h1>
                </div>
            </div>
            </diV>
            <!-- COTÉ GAUCHE -> IMAGE ET POCHETTE PLASTIQUE -->

            <!-- COTÉ DROIT -> DESCRIPTION DU MEMBRE -->
            <div class="membre-description col">
                <div class="element">
                    <h1>KAMS</h1>
                    <h2>
                        <?php the_field('surnom_kams'); ?>
                    </h2>
                </div>
                <div class="element">
                    <h3>
                        <?php the_field('description_kams'); ?>
                    </h3>
                </div>
                <div class="element">
                    <a href="#">
                        <div class="btn btn-custom">
                            Voir plus
                        </div>
                    </a>
                </div>
            </div>
            <!-- COTÉ DROIT -> DESCRIPTION DU MEMBRE -->

        </div>
        <!-- KAMS -->


        <!-- CRYSTALL TEARS -->
        <div class="membre membre-right row">

            <!-- COTÉ GAUCHE -> DESCRIPTION DU MEMBRE -->
            <div class="membre-description col">
                <div class="element">
                    <h1>CRYSTALL TEARS</h1>
                    <h2>
                        <?php the_field('surnom_krystal'); ?>
                    </h2>
                </div>
                <div class="element">
                    <h3>
                        <?php the_field('description_krystal'); ?>
                    </h3>
                </div>
                <div class="element">
                    <a href="#">
                        <div class="btn btn-custom">
                            Voir plus
                        </div>
                    </a>
                </div>
            </div>
            <!-- COTÉ GAUCHE -> DESCRIPTION DU MEMBRE -->

            <!-- COTÉ DROIT -> IMAGE ET POCHETTE PLASTIQUE -->
            <div class="left col">
            <div class="membre-images">
                <div class="photo-membre">
                    <?php
                    $image = get_field('photo_krystal');
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
                    <h1 class="nom-membre-pochette" id="nom-krystal">CRYSTALL TEARS</h1>
                </div>
            </div>
            </diV>
            <!-- COTÉ DROIT -> IMAGE ET POCHETTE PLASTIQUE -->

        </div>
        <!-- CRYSTALL TEARS -->


    </div>

</div>