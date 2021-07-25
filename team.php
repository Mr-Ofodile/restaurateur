<?php
define("TITLE", "Team | Franklins Fine Dining");
include('includes/header.php'); 
?>
<div id="team-members" class="cf">
<h1>Our Team at Franklin's</h1>
<p>dummy text dummy text dummy text dummy text
    <strong>dummy text ummy text</strong></p>
    <hr>
</div>
<?php
foreach($teamMembers as $member)
{
?>

<div class="member">
<img src="img/<?php echo $member['img'];?>.png" alt="<?php echo $member['name'];?>">
<h2><?php echo $member['name']; ?></h2>
<small><?php echo $member['position']; ?></small>
    
<p><?php echo $member['bio']; ?></p>

</div>


<?php
}
?>

<?php
include('includes/footer.php')
?>