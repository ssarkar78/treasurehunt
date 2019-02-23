<?php
$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 180; URL=$url1");
?>
<script>

</script>
<div id="game_head">
    <p style="font-weight:500;color:white" >Level 19: Way to Valley Of Dreams</p>
    <pre style="font-weight:500;color:white">The door way is locked with magic, solve the puzzle to unlock the door..</pre>
</div>
<div id="game_body">
<div>Time left = <span id="timer"></span></div>
    <body onload = "init_game()">
        <table id='l2_puzzle' width="400" cellpadding="40">
            <tr><!First row>
                <td data-val = "1" id = "cell_1"></td>
                <td data-val = "2" id = "cell_2"></td>
                <td data-val = "3" id = "cell_3"></td>
                <td data-val = "4" id = "cell_4"></td>
            </tr>
            <tr><!Second row>
                <td data-val = "5" id = "cell_5"></td>
                <td data-val = "6" id = "cell_6"></td>
                <td data-val = "7" id = "cell_7"></td>
                <td data-val = "8" id = "cell_8"></td>
            </tr>
            <tr><!Third row>
                <td data-val = "9" id = "cell_9"></td>
                <td data-val = "10" id = "cell_10"></td>
                <td data-val = "11" id = "cell_11"></td>
                <td data-val = "12" id = "cell_12"></td>
            </tr>
            <tr><!Fourth row>
                <td data-val = "13" id = "cell_13"></td>
                <td data-val = "14" id = "cell_14"></td>
                <td data-val = "15" id = "cell_15"></td>
                <td data-val = "16" id = "cell_16"></td>
            </tr>
        </table><br>
    <form method='post'>
    <input  class="form-submit-button" type="submit" name="submit" value="submit" onClick="checkSol()"/>
    <input id="key" hidden name="key" type='text'/>
    <input hidden name="moves" type='text'/></form>
    </body>
    <script>
    document.getElementById('timer').innerHTML =
  03 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
    </script>
</html>
</div>
