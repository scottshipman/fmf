<?php
/**
 * @file
 * custom template for Location / Address Block
 */
$node = $items['node'];
?>

<?php if(!empty($node)): ?>
<div id="market-location-wrapper" class="market-location-wrapper">
    <h4>Location</h4>

    <div id="market-pin-<?php print $node->nid; ?>" class="market-pin">
        <i class="material-icons">place</i></div>

    <div id="market-address-<?php print $node->nid; ?>" class="market-address">
        <?php if(!empty($node->field_street)): ?><?php print $node->field_street['und'][0]['value']; ?><br><?php endif; ?>
        <?php if(!empty($node->field_city)): ?><?php print $node->field_city['und'][0]['value']; ?>, <?php endif; ?>
        <?php if(!empty($node->field_state)): ?><?php print $node->field_state['und'][0]['value']; ?> <?php endif; ?>
        <?php if(!empty($node->field_zip)): ?><?php print $node->field_zip['und'][0]['value']; ?><?php endif; ?>

        <?php if(!empty($node->field_county)): ?><br />County: <?php print $node->field_county['und'][0]['value']; ?><?php endif; ?>
    </div>
    <?php if(!empty($node->field_location)): ?>
        <div id="market-location-<?php print $node->nid; ?>"  class="market-location">
            <i class="material-icons">location_city</i>
            <?php print $node->field_location['und'][0]['value']; ?>
        </div>
    <?php endif; ?>
</div>

<?php endif; ?>
