<?php
/**
 * @file
 * Template file for the front page.
 */
?>

<?php if (!empty($wre_header)): ?>
  <?php print render($wre_header); ?>
<?php endif; ?>

<div class="front-page">
  Front Page
</div>

<?php if (!empty($wre_footer)): ?>
  <?php print render($wre_footer); ?>
<?php endif; ?>
