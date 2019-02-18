<?php
?>
<div class="bg" style="color:black;background-image: url('assets/img/whitebg.jpg');"> 
<div id="game_head">
    <p>Level 31</p>
</div>
<div class="prevent_sel" id="game_body">
<p id="question">
<?php
	require_once('rfc6238.php');
	
    $secretkey = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
    print sprintf('<img src="%s"/>',TokenAuth6238::getBarCodeUrl('','',$secretkey,'bitesys'));
?>
</p>
<form method='post'>Answer : <input name="key" type="text" autocomplete="off" >&nbsp;&nbsp;
<input class="form-submit-button" type="submit" name="submit" value="Submit"></form>
</div>
</div>
<script>endLoading(0)</script>
