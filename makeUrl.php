<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["url"])) {
    $urlErr = "url is required.";
  } else {
    $url = test_input($_POST["url"]);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
      $urlErr = "Invalid url format";
    }
  }
  
  if (empty($_POST["url2"])) {
  } else {
    $url2 = test_input($_POST["url2"]);
    if (!filter_var($url2, FILTER_VALIDATE_URL)) {
      $url2Err = "Invalid url format";
    }
  }
    
  if (empty($_POST["url3"])) {
  } else {
    $url3 = test_input($_POST["url3"]);
    if (!filter_var($url3, FILTER_VALIDATE_URL)) {
      $url3Err = "Invalid url format";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Han.gl Clicks to SVG</h1>
<h2>url Maker</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  url: <input type="text" name="url" value="<?php echo $url;?>">
  <span class="error">* <?php echo $urlErr;?></span>
  <br><br>
  url2: <input type="text" name="url2" value="<?php echo $url2;?>">
  <span class="error">* <?php echo $url2Err;?></span>
  <br><br>
  url3: <input type="text" name="url3" value="<?php echo $url3;?>">
  <span class="error"><?php echo $url3Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>SVG link:</h2>";
echo $url;
echo $url2;
echo $url3;
?>

</body>
</html>