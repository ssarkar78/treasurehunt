<?php
?>
<div class="bg" style="color:<?php echo $levels[$curr_lvl]->color ;?>; background-image:<?php echo $levels[$curr_lvl]->bgImg ;?>">
<div id="game_head">
    <p><?php echo $levels[$curr_lvl]->lvlHead ;?></p>
</div>
<div class=<?php echo "'".$levels[$curr_lvl]->class."'" ;?> id="game_body">
<p><?php echo $levels[$curr_lvl]->question ;?></p>
<form method='post'>Answer : <input name="key" type="text" autocomplete="off" >&nbsp;&nbsp;<input class="form-submit-button" type="submit" name="submit" value="Submit"></form>
</div>
</div>