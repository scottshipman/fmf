<?php
$nid = $row->nid;
?>
<div id="market-<?php echo $nid; ?>" class = "market-wrapper">
    <div id="market-title-<?php echo $nid ?>" class="market-title"><h3><?php echo $fields['title']->content;?></h3></div>

    <div id="market-pin-<?php echo $nid ?>" class="market-pin">
        <i class="material-icons">place</i></div>
    <div id="market-address-<?php echo $nid ?>" class="market-address">
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
        <div id="market-website-<?php echo $nid; ?>" class="market-website">
            <i class="material-icons">store</i>
            <a href="<?php echo $fields['field_website']->content;?>" target="new">
                <?php echo $fields['field_website']->content;?>
            </a>
        </div>
    <?php endif; ?>

    <div id="market-more-<?php echo $nid ?>" class="market-more-link">
        <i class="material-icons">info</i> <a href="<?php echo $fields['path']->content; ?>">more info</a>
    </div>
</div>


