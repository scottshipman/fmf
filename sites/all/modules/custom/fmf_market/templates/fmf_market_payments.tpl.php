<?php
/**
 * @file
 * custom template for Location / Address Block
 */
$node = $items['node'];
$payments = $items['payments'];
?>

<?php if(!empty($payments)): ?>
    <div id="market-payments-wrapper" class="market-payments-wrapper">
        <h4>Accepted Payments</h4>
        <ul id="market-payments" class="market-payments">

            <?php
            foreach($payments as $name){
                $class = str_replace(" ","_",$name);
                print "<li id='$name' class='market-payment-item inline-item $class'>";
                print '<i class="material-icons">monetization_on</i>';
                print " $name</li>";
            }
            ?>

        </ul>
    </div>

<?php endif; ?>

