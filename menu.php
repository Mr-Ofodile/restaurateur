<?php

define("TITLE", "Menu | Franklins Fine Dining");
include('includes/header.php'); 
?>




<div id="menu-items">

    
    <h1>Our Delicious Menu Items</h1>
    <p>like our team our menu is small and diverse &dash; and it packs a punch. </p>
    <p><em>click any of the items below to learn more</em></p>
    <hr>
    
    <ul>
<?php foreach($menuItems as $dish => $item){ ?>
        
<li><a href="dish.php?item=<?php echo $dish;
    ?>"> <?php echo $item['title'];?></a><sup>$</sup><?php echo $item['price']; ?></li>    
        
        <?php } ?>
    </ul>    
</div>














<?php
include('includes/footer.php');
?>