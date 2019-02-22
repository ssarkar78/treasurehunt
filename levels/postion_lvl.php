<?php
?>
<div class="bg" style="font-weight:bold;color:black; background-image: url('assets/img/whitebg.jpg');"> 
<div id="game_head">
    <p>The marvel movie released in 1986?</p>
</div>
<div class="prevent_sel" id="game_body">
<img src="assets/img/duck.jpg" alt="Planets" usemap="#planetmap">

<map name="planetmap">
  <area shape="rect" coords="70,90,410,200" alt="Sun" href="game.php?key=pass">
</map>
<form method='post' id="target">Answer : 
<input id="key_input" name="key" type="text" autocomplete="off">&nbsp;&nbsp;
<input class="form-submit-button" type="submit" name="submit" value="Submit">
</form>
</div>
</div>