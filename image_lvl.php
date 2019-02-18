<?php
?>
<div class="bg" style="color:<?php echo $levels[$curr_lvl]->color ;?>; background-image:<?php echo $levels[$curr_lvl]->bgImg ;?>">
<div id="game_head">
    <p><?php echo $levels[$curr_lvl]->lvlHead ;?></p>
</div>
<div class=<?php echo "'".$levels[$curr_lvl]->class."'" ;?> id="game_body">
<p><?php echo $levels[$curr_lvl]->question ;?></p>
<?php
foreach ($levels[$curr_lvl]->questionImg as $lvlImg) {
    echo "<img height='150px' width='150px' src='assets/img/".$lvlImg."'/>&nbsp;";
}
?>
<form method='post'>Answer : <input name="key" type="text" autocomplete="off" >&nbsp;&nbsp;<input class="form-submit-button" type="submit" name="submit" value="Submit"></form>
</div>
</div>