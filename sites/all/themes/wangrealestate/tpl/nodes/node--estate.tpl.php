<?php
/**
 * @file
 * Template file for the Estate content type.
 */
?>
<div class="carousel">
  <?php if (!empty($image_paths)): ?>
    <ul>
      <?php foreach ($image_paths as $key => $image): ?>
        <li><img src="<?php print $image; ?>" /></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<section class="info-description">
  <div class="title">
    <h2 class="name">
      <?php if(!empty($title)): ?>
       <?php print $title; ?>
      <?php endif; ?>
    </h2>

    <h3 class="address">
      <?php if(!empty($address)): ?>
        <?php print $address; ?>
      <?php endif; ?>
    </h3>
  </div>

  <p class="info">
    <?php if(!empty($list_price)): ?>
      <?php print $list_price['amount']; ?>
      <?php print $list_price['currency']; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($cost_sqft)): ?>
      <?php print $cost_sqft['amount']; ?>
      <?php print $cost_sqft['currency']; ?>
    <?php endif; ?>
  </p>

  <p class="beds">
    <?php if(!empty($beds)): ?>
      <?php print $beds; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($baths)): ?>
      <?php print $baths; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($sqft)): ?>
      <?php print $sqft; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($lot_size)): ?>
      <?php print $lot_size; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($year_built)): ?>
      <?php print $year_built; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($property_type)): ?>
      <?php print $property_type; ?>
    <?php endif; ?>
  </p>

  <p class="info">
    <?php if(!empty($stories)): ?>
      <?php print $stories; ?>
    <?php endif; ?>
  </p>

  <p class="info info-last">
    <?php if(!empty($mls)): ?>
      <?php print $mls; ?>
    <?php endif; ?>
  </p>

  <h4 class="description">Description</h4>
  <p class="description-info">
    <?php if(!empty($description)): ?>
      <?php print $description['safe_value']; ?>
    <?php endif; ?>
  </p>
</section>
<!--
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
-->