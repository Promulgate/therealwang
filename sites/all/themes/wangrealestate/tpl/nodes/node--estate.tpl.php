<?php
/**
 * @file
 * Template file for the Estate content type.
 */
?>
<section class="carousel">
  <?php if (!empty($image_paths)): ?>
    <ul class="carousel-list">
      <?php foreach ($image_paths as $key => $image): ?>
        <li><img src="<?php print $image; ?>" /></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>

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

  <div class="info">
    <?php print t('List Price:'); ?>
    <?php if(!empty($list_price)): ?>
      <?php print $list_price['amount']; ?>
      <?php print $list_price['currency']; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('$/Sqft:'); ?>
    <?php if(!empty($cost_sqft)): ?>
      <?php print $cost_sqft['amount']; ?>
      <?php print $cost_sqft['currency']; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Beds:'); ?>
    <?php if(!empty($beds)): ?>
      <?php print $beds; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Baths:'); ?>
    <?php if(!empty($baths)): ?>
      <?php print $baths; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Sqft:'); ?>
    <?php if(!empty($sqft)): ?>
      <?php print $sqft; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Lot Size:'); ?>
    <?php if(!empty($lot_size)): ?>
      <?php print $lot_size; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Year Built:'); ?>
    <?php if(!empty($year_built)): ?>
      <?php print $year_built; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Property Type:'); ?>
    <?php if(!empty($property_type)): ?>
      <?php print $property_type; ?>
    <?php endif; ?>
  </div>

  <div class="info">
    <?php print t('Stories:'); ?>
    <?php if(!empty($stories)): ?>
      <?php print $stories; ?>
    <?php endif; ?>
  </div>

  <div class="info info-last">
    <?php print t('MLS:'); ?>
    <?php if(!empty($mls)): ?>
      <?php print $mls; ?>
    <?php endif; ?>
  </div>

  <h4 class="description">Description</h4>
  <div class="description-info">
    <?php if(!empty($description)): ?>
      <?php print $description['safe_value']; ?>
    <?php endif; ?>
  </div>
</section>

<div>
    <?php if (!empty($geolocation)): ?>
      <?php foreach ($geolocation as $key => $geo): ?>
        <?php print $geo; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
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