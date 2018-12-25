
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Sohbet Robotu</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    
    </ul>
  </div>
</nav>
<?php

$soru = $dili = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$soru = test_input($_POST["soru"]);
	$dili= test_input($_POST["dili"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Soru: <input type="text" name="soru" value="<?php echo $soru;?>">
  
  <br><br>
  Dili: <input type="text" name="dili" value="<?php echo $dili;?>">
  
  <br><br>
	
  <input type="submit" class="btn btn-warning" name="submit" value="Submit">  
</form>

<div class="alert alert-primary" role="alert">
<?php

echo "<h4>Sohbet Kutusu:</h4>";
echo $soru;
echo "<br>";
echo $dili;
echo "<br>";


?>
</div>

</body>
</html>
