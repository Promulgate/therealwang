<?php
/**
 * @file
 * Template file for the Estate content type.
 */
?>
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

  <p class="info">List Price: <span></span></p>
  <p class="info">$/SqFt: <span></span></p>
  <p class="beds">Bed: <span></span></p>
  <p class="info">Bath: <span></span></p>
  <p class="info">SqFt: <span></span></p>
  <p class="info">Lot Size: <span></span></p>
  <p class="info">Year Built: <span></span></p>
  <p class="info">Property Type: <span></span></p>
  <p class="info">Stories: <span></span></p>
  <p class="info info-last">MLS#: Brian Wang<span></span></p>
  <h4 class="description">Description</h4>
  <p class="description-info">DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData DummyData</p>
</section>
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
