<?php
    $html = '<div id="cip_tnh" style="display:none;position:absolute;bottom:60px; left:10px;"><img id ="signature" style="width:10px;" src="assets/img/bitesys_link.png"/></div>';
    echo "<script>$('body').prepend('".$html."')</script>";
switch($curr_lvl){
    case 34:
    echo "<script>$('.icon-medkit').css('visibility','visible')</script>";
    echo "<script>$('#signature').attr('src','assets/img/bitesysiims.png')</script>";
    break;
}


?>