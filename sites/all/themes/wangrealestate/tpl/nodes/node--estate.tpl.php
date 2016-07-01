<?php
/**
 * @file
 * Template file for the Estate content type.
 */
?>
<div class="wrapper">
  <section class="carousel">
    <?php if (!empty($image_paths)): ?>
      <ul class="carousel-list">
        <?php foreach ($image_paths as $key => $image): ?>
          <li>
            <img src="<?php print $image; ?>" />
          </li>
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
      <h4 class="info-type">
        <?php print t('List Price:'); ?>
      </h4>
      <?php if(!empty($list_price)): ?>
        $
        <?php print $list_price['amount']; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('$/Sqft:'); ?>
      </h4>
      <?php if(!empty($cost_sqft)): ?>
        $
        <?php print $cost_sqft['amount']; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Beds:'); ?>
      </h4>
      <?php if(!empty($beds)): ?>
        <?php print $beds; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Baths:'); ?>
      </h4>
      <?php if(!empty($baths)): ?>
        <?php print $baths; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Sqft:'); ?>
      </h4>
      <?php if(!empty($sqft)): ?>
        <?php print $sqft; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Lot Size:'); ?>
      </h4>
      <?php if(!empty($lot_size)): ?>
        <?php print $lot_size; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Year Built:'); ?>
      </h4>
      <?php if(!empty($year_built)): ?>
        <?php print $year_built; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Property Type:'); ?>
      </h4>
      <?php if(!empty($property_type)): ?>
        <?php print $property_type; ?>
      <?php endif; ?>
    </div>

    <div class="info">
      <h4 class="info-type">
        <?php print t('Stories:'); ?>
      </h4>
      <?php if(!empty($stories)): ?>
        <?php print $stories; ?>
      <?php endif; ?>
    </div>

    <div class="info info-last">
      <h4 class="info-type">
        <?php print t('MLS#:'); ?>
      </h4>
      <?php if(!empty($mls)): ?>
        <?php print $mls; ?>
      <?php endif; ?>
    </div>

    <h4 class="description">
      Description
    </h4>
    <div class="description-info">
      <?php if(!empty($description)): ?>
        <?php print $description['safe_value']; ?>
      <?php endif; ?>
    </div>
  </section>

  <div id="googleMap" data-lat="<?php print $geolocation['lat']; ?>" data-lng="<?php print $geolocation['lon']; ?>">
  </div>

  <section class="disclaimer">
    <h4 class="disclaimer-title">Disclaimer</h4>
    <p class="disclaimer-info">
      <?php print t("The information being provided by CARETS is for the visitor's personal, non-commercial use and may not be used for any purpose other than to identify prospective properties visitor may be interested in purchasing. Any information relating to a property referenced on this web site comes from the Internet Data Exchange (IDX) program of the CARETS MLS. This web site may reference real estate listing(s) held by a brokerage firm other than the broker and/or agent who owns this web site. Any information relating to a property, regardless of source, including but not limited to square footages and lot sizes, is deemed reliable but not guaranteed and should be personally verified through personal inspection by and/or with the appropriate professionals. The data contained herein is copyrighted by CARETS® and is protected by all applicable copyright laws. Any dissemination of this information is in violation of copyright laws and is strictly prohibited."); ?>
    </p>
  </section>
</div>