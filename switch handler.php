<html>
<head>
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

<form method="post">
<button class="btn" name="LightON">Light ON</button>&nbsp;
<button class="btn" name="LightOFF">Light OFF</button><br><br>
</form> 


</html>