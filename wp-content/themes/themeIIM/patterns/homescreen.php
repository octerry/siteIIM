<?php
/**
 * Title: Homescreen
 * Slug: themeIIM/homescreen
 * Categories: featured
 */
?>

<!-- wp:cover {"url":"<?php echo get_template_directory_uri();?>/assets/images/home-screen-image.jpeg", "className":"home-screen"} -->
<div class="wp-block-cover home-screen">
    <span aria-hidden="true" class="wp-block-cover__background home-screen-filter"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo get_template_directory_uri();?>/assets/images/home-screen-image.jpeg" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container home-screen-section">
        <!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading">L'école des <br>métiers futurs</h1>
        <!-- /wp:heading -->
        <!-- wp:heading {"level":2, "className":"home-screen-description"} -->
        <h2 class="wp-block-heading home-screen-description">Jeu-vidéo . Web . 3D . Créa . Audiovisuel . Com</h2>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"candidature-button"} -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button candidature-button" href="/candidature">Candidature</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <div class="wp-block-cover__inner-container jpo-section">
        <!-- wp:heading {"level":1, "className":"jpo-title"} -->
        <h1 class="wp-block-heading jpo-title">Portes ouvertes</h1>
        <!-- /wp:heading -->
        <div class="jpo-bloc">
            <div class="jpo-infos">
                <!-- wp:heading {"level":2, "className":"jpo-city"} -->
                <h2 class="wp-block-heading jpo-city">Nantes</h2>
                <!-- /wp:heading -->
                <!-- wp:heading {"level":3, "className":"jpo-description"} -->
                <h3 class="wp-block-heading jpo-description">10 octobre</h3>
                <!-- /wp:heading -->
            </div>
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"jpo-button"} -->
                <div class="wp-block-button jpo-button"><a class="wp-block-button__link wp-element-button" href="/portes-ouvertes">S'inscrire --></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <div class="jpo-bloc">
            <div class="jpo-infos">
                <!-- wp:heading {"level":2, "className":"jpo-city"} -->
                <h2 class="wp-block-heading jpo-city">Paris</h2>
                <!-- /wp:heading -->
                <!-- wp:heading {"level":3, "className":"jpo-description"} -->
                <h3 class="wp-block-heading jpo-description">17 octobre</h3>
                <!-- /wp:heading -->
            </div>
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"jpo-button"} -->
                <div class="wp-block-button jpo-button"><a class="wp-block-button__link wp-element-button" href="/portes-ouvertes">S'inscrire --></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <div class="wp-block-cover__inner-container home-screen-sponsors">
        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2025/07/cumulus-association.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2021/05/Logo-IABFrance-blanc.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2021/05/logo-tdn-blanc.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2025/07/logo-snjv-1.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2021/05/logo-club-da-blanc.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2025/02/logo-RECA-2025.webp" alt="Sponsor"/></figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2025/07/capital-gameslogo.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"large","className":"sponsor-logo"} -->
        <figure class="wp-block-image size-large sponsor-logo"><img src="https://www.iim.fr/ecole-web/wp-content/uploads/2021/05/logo-cap-digital-blanc.png" alt="Sponsor"/></figure>
        <!-- /wp:image -->
    </div>
</div>
<!-- /wp:cover -->