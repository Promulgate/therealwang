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
  <div class="cs-loader hide">
    <div class="cs-loader-inner">
      <label> ●</label>
      <label> ●</label>
      <label> ●</label>
      <label> ●</label>
      <label> ●</label>
      <label> ●</label>
    </div>
  </div>
  <ul id="front-list">

  </ul>
</div>

<?php if (!empty($wre_footer)): ?>
  <?php print render($wre_footer); ?>
<?php endif; ?>
