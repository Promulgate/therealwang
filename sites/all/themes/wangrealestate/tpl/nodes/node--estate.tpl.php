<?php
/**
 * @file
 * Template file for the Estate content type.
 */
?>

<article class="estate-container">
  <div>
    <?php if (!empty($beds)): ?>
      <?php print $beds; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($baths)): ?>
      <?php print $baths; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($list_price)): ?>
      <?php foreach ($list_price as $key => $price): ?>
        <?php print $price; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($cost_sqft)): ?>
      <?php foreach ($cost_sqft as $key => $cost): ?>
        <?php print $cost; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($image_paths)): ?>
      <?php foreach ($image_paths as $key => $image): ?>
        <img src="<?php print $image; ?>" />
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($sqft)): ?>
      <?php print $sqft; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($lot_size)): ?>
      <?php print $lot_size; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($year_built)): ?>
      <?php print $year_built; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($property_type)): ?>
      <?php print $property_type; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($stories)): ?>
      <?php print $stories; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($mls)): ?>
      <?php print $mls; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($description)): ?>
      <?php print $description['safe_value']; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($address)): ?>
      <?php print $address; ?>
    <?php endif; ?>
  </div>

  <div>
    <?php if (!empty($geolocation)): ?>
      <?php foreach ($geolocation as $key => $geo): ?>
        <?php print $geo; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</article>
