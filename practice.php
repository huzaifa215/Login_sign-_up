
<!DOCTYPE HTML>
<html>
<head>
<style>
body {
  background-color: lightblue;
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
margin-left:50%

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
// define variables and set to empty values
ob_end_flush();
 $comment = "";


  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);

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
	return str_word_count($Text);
}
function splist($comment){
  $arr1 = str_split($comment);
  echo "<pre>";
  // sorting
  sort($arr1);
  echo "<br>Seperate print";
  print_r($arr1);
  echo "<br>";

  print_r(array_count_values($arr1));
  echo"</pre>";



  echo"<pre>";

  arsort($arr1);
  print_r(array_count_values($arr1));


  echo"</pre>";

}

?>
<h2>Word Counter is </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1 align=center> Word Assingment 1</h1>

  Comment: <textarea id="comment" name="comment" rows="5" cols="40" placeholder="Enter Your Text upto 1000 words (No Special Character Allowed)"><?php echo $comment?> </textarea>
  <br><br>
 <button  class="button" margin-left="50"> Result </button>
</form>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onclick="reset($comment)">
  <button  class="button" margin-left="50" >Reset Record</button>
  </form>


<?php
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>Your Input paragraph is as follows:</h2>";
echo "<br>";
echo showEnterText($comment);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>The Total Number of Words are as follows : </h2>";
echo showfrequency($comment);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2 style='color:blue;'>The Frequency of words are as follows : </h2>";
splist($comment);
?>
</body>
</html>

<?php
// echo "<h2>Your Input:</h2>";
// echo $comment;
// echo "<br>";
// echo "The Total word Count is =";
// echo strlen($comment);
// $arr1 = str_split($comment);
// echo "<pre>";
// // sorting
// sort($arr1);
// echo "<br>Seperate print";
// print_r($arr1);
// echo "<br>";
//
// print_r(array_count_values($arr1));
// echo"</pre>";
//
//
//
// echo"<pre>";
//
// arsort($arr1);
// print_r(array_count_values($arr1));
//
//
// echo"</pre>";

?>




  <!-- </body>

</html> -->
