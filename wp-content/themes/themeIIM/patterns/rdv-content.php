<?php
/**
 * Title: RDV
 * Slug: themeIIM/rdv-content
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"main","className":"rdv-main","layout":{"type":"default"}} -->
<main class="wp-block-group rdv-main">
  <!-- wp:group {"tagName":"div","className":"rdv-container","layout":{"type":"default"}} -->
  <div class="wp-block-group rdv-container">
    <!-- wp:heading {"level":1, "className":"rdv-title"} -->
    <h1 class="wp-block-heading rdv-title">Prise de rendez-vous</h1>
    <!-- /wp:heading -->
    <!-- wp:heading {"level":2,"className":"rdv-subtitle","anchor":"rdv-reason-title"} -->
    <h2 class="wp-block-heading rdv-subtitle" id="rdv-reason-title">Précisez la raison de ce rendez-vous</h2>
    <!-- /wp:heading -->
    <!-- wp:html -->
    <fieldset aria-labelledby="rdv-reason-title">
      <label class="rdv-radio-text"><input class="rdv-radio-input" type="radio" id="renseignement" name="rdv" value="renseignement"> Renseignement</label>
      <label class="rdv-radio-text"><input class="rdv-radio-input" type="radio" id="proposition" name="rdv" value="proposition"> Proposition commerciale</label>
    </fieldset>
    <!-- /wp:html -->
    <!-- wp:html -->
    <input type="text" class="rdv-text-input" aria-label="Décrivez votre situation ici" placeholder="Décrivez votre situation ici">
    <!-- /wp:html -->
    <!-- wp:heading {"level":2, "className":"rdv-subtitle"} -->
    <h2 class="wp-block-heading rdv-subtitle">Une remarque supplémentaire ? (optionnelle)</h2>
    <!-- /wp:heading -->
    <!-- wp:html -->
    <input type="text" class="rdv-text-input" aria-label="Remarque supplémentaire" placeholder="Écrivez votre commentaire ici">
    <!-- /wp:html -->
    <!-- wp:heading {"level":2, "className":"rdv-subtitle"} -->
    <h2 class="wp-block-heading rdv-subtitle">Sélectionnez la date et l’heure</h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"className":"rdv-agenda"} -->
    <p class="rdv-agenda">Calendrier ici (trop complexe à coder)</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</main>
<!-- /wp:group -->