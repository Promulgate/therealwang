<?php
  /**
   * @file
   * Page template
   */
?>

<?php if (!empty($messages)): ?>
  <?php print $messages; ?>
<?php endif; ?>

<?php if (!empty($tabs)): ?>
  <?php print render($tabs); ?>
<?php endif; ?>

<?php if (!empty($wre_header)): ?>
  <?php print render($wre_header); ?>
<?php endif; ?>

<?php if (!empty($page['content'])): ?>
  <?php print render($page['content']); ?>
<?php endif; ?>

<?php if (!empty($wre_footer)): ?>
  <?php print render($wre_footer); ?>
<?php endif; ?>
