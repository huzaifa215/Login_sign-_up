<!DOCTYPE HTML>
<html>
<head>
<style>

body{
background:lightblue;
}

textarea{
display: block;
background:#f2f2f2;
width:500px;
height:200px;
font-size:20px;
margin:auto;
}
.button {
background-color: #555555;
margin-left=50%

  border-radius:12px ;
  border: 2px solid #4CAF50;
  transition-duration: 0.4s;
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
 width:200px;
	height:60px;
	margin-left:550px;
  	margin-top:4px;
}
.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
</head>
<body>
<?php
ob_end_flush();
$Text = "";
if (empty($_POST["Text"])) {
    $Text = "";
  } else {
$Text = test_input($_POST["Text"]);
  }
function test_input($data) {
  $data = htmlspecialchars($data);
  return $data;
}
function showEnterText($Text)
{
  return $Text;
}
function showfrequency($Text)
{
	return strlen($Text);
}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" border="10">
  <h1 align=center>Word Calculator By Huzaifa </h1>
  <textarea name="Text" rows="1000" cols="1000" maxlength="1000" placeholder="Enter Your Text upto 1000 words (No Special Character Allowed) "><?php echo $Text;?></textarea>
  <button  class="button" margin-left="50"> Result </button>
</form>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onclick="reset($Text)">
  <button  class="button" margin-left="50" >Reset Record</button>
  </form>
<?php
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>Your Input paragraph is as follows:</h2>";
echo "<br>";
echo showEnterText($Text);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>The Total Number of Words are as follows : </h2>";
echo showfrequency($Text);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>The Frequency of words are as follows : </h2>";
$strArray = count_chars($Text,1);

foreach ($strArray as $key=>$value)
   {
   echo "The character <b>'".chr($key)."'</b> was found $value time(s)<br>";
   }
  echo "<br>";
?>
</body>
</html>
