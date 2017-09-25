<html>
<head>
<style type="text/css">
	.btn {
        background-color: #3cb371;
        color: #FFFFFF;
        padding: 70px;
        border-radius: 70px;
        -moz-border-radius: 570px;
        -webkit-border-radius: 70px;
        margin:70px
</style>
<meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<?php
if (isset($_POST['LightON']))
{
exec("sudo python /home/pi/Lighton_1.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /home/pi/Lightoff_1.py");
}
?>
<div style="text-align: center;">
<form method="post">
<button class="btn" name="LightON">Light ON</button>&nbsp;
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>

<button class="btn" name="LightOFF">Light OFF</button><br><br>
</form> 
</div>

</html>