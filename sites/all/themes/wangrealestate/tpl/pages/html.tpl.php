<?php
/**
 *  @file
 *  Main HTML template.
 */
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>
      <?php print $head_title; ?>
    </title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <style type="text/css"> #googleMap img { max-width: none; } </style>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
