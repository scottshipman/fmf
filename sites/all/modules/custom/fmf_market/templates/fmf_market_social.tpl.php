<?php
/**
 * @file
 * custom template for Location / Address Block
 */
$node = $items['node'];
$has_links = $items['has_links'];
?>

<?php if($has_links): ?>
<div id="market-social-wrapper" class="market-social-wrapper">
    <h4>Links</h4>
    <ul id="market-social" class="market-social inline-list">

        <?php if(!empty($node->field_website)): ?>
            <li class="market-social-item"><i class="fa fa-external-link" aria-hidden="true"></i>
                <a href="<?php print $node->field_website['und'][0]['value']; ?>" target="new">
                    <?php print $node->field_website['und'][0]['value']; ?>
                </a>
            </li>
        <?php endif; ?>
        <?php if(!empty($node->field_facebook)): ?>
            <li class="market-social-item"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                <a href="<?php print $node->field_facebook['und'][0]['value']; ?>" target="new">
                    <?php print $node->field_facebook['und'][0]['value']; ?>
                </a>
            </li>
        <?php endif; ?>
        <?php if(!empty($node->field_twitter)): ?>
            <li class="market-social-item"><i class="fa fa-twitter" aria-hidden="true"></i> <?php print $node->field_twitter['und'][0]['value']; ?></li>
        <?php endif; ?>
        <?php if(!empty($node->field_youtube)): ?>
            <li class="market-social-item"><i class="fa fa-youtube" aria-hidden="true"></i>
                <a href="<?php print $node->field_youtube['und'][0]['value']; ?>" target="new">
                    <?php print $node->field_youtube['und'][0]['value']; ?>
                </a>
            </li>
        <?php endif; ?>
        <?php if(!empty($node->field_other_media)): ?>
            <li class="market-social-item"><i class="fa fa-film" aria-hidden="true"></i> <?php print $node->field_other_media['und'][0]['value']; ?></li>
        <?php endif; ?>

    </ul>

</div>

<?php endif; ?>
