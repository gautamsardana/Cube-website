<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$pass=$name="";
$name = test_input($_POST["fname"]);
$pass = test_input($_POST["pass"]);
if($name=="Gautam" && $pass=="admin")
{
echo '<script type="text/javascript">
			window.location="index1.html"
			</script>';
		}
else{
	$message = "Wrong Userid or Password";
echo "<script type='text/javascript'>alert('$message');</script>";
echo '<script type="text/javascript">
			window.location="index.html"
			</script>';
}
?>
