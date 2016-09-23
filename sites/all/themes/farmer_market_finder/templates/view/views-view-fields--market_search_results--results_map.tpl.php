<?php
$nid = $row->nid;
?>
<div id="map-market-<?php echo $nid; ?>" class = "map-market-wrapper">
    <div id="map-market-title-<?php echo $nid ?>" class="map-market-title"><h4><?php echo $fields['title']->content;?></h4></div>

    <div id="map-market-pin-<?php echo $nid ?>" class="map-market-pin">
    <div id="map-market-address-<?php echo $nid ?>" class="map-market-address">
        <?php if(isset($fields['field_street']) && !empty($fields['field_street']->content)): ?>
            <?php echo $fields['field_street']->content;?><br />
        <?php endif; ?>
        <?php if(isset($fields['field_city']) && !empty($fields['field_city']->content)): ?>
            <?php echo $fields['field_city']->content;?>,
        <?php endif; ?>
        <?php if(isset($fields['field_state']) && !empty($fields['field_state']->content)): ?>
            <?php echo $fields['field_state']->content;?>
        <?php endif; ?>
        <?php if(isset($fields['field_zip']) && !empty($fields['field_zip']->content)): ?>
            <?php echo $fields['field_zip']->content;?>
        <?php endif; ?>
    </div>
    <?php if(isset($fields['field_website']) && !empty($fields['field_website']->content)): ?>
        <div id="map-market-website-<?php echo $nid; ?>" class="map-market-website">
            <a href="<?php echo $fields['field_website']->content;?>" target="new">
                <?php echo $fields['field_website']->content;?>
            </a>
        </div>
    <?php endif; ?>

</div>


