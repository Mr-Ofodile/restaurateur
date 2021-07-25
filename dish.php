<?php

define("TITLE", "Menu-Item | Franklins Fine Dining");
include('includes/header.php'); 
function strip_bad($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/");
}

if(isset($_GET['item']))
{
    $menuItem = $_GET['item'];
    $dish = $menuItems[$menuItem];
}

function suggestedTip($price, $tip)
{
    $totalTip = $price * $tip;
    
    echo money_format("%.2n",$totalTip);
}
?>
<hr>

<div id="dish">
<h1><?php echo $dish['title']; ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?></span></h1>
<p><?php echo $dish['blurb'] ?></p>
    
<p><strong>Suggested Beverage:<?php echo $dish['drink']?></strong></p> 
<p><em>Suggested Tip:<sup>$</sup><?php suggestedTip($dish['price'],0.20) ?></em></p>
</div>
<hr>

<a href="menu.php" class="button previous">&laquo;
Back To Menu.
</a>


<?php
include('includes/footer.php')
?>