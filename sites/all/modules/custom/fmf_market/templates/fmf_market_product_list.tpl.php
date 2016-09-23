<?php
/**
 * @file
 * custom template for Product List Block
 */
$products = $items['products'];
?>

<?php if(!empty($products)): ?>
    <div id="market-product-list-wrapper" class="market-product-list-wrapper">
        <h4>Product Information</h4>
        <ul id="market-product-list" class="market-product-list inline-list">
            <?php
            foreach($products as $name){
                $class = str_replace(" ","_",$name);
                print "<li id='$name' class='market-product-item inline-item $class'>$name</li>";
            }
            ?>
        </ul>
    </div>
<?php endif; ?>
