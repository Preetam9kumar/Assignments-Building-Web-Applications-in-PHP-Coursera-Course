<!DOCTYPE html>
<html>
<head>
<title>Guessing Game for Preetam Kumar </title>
</head>
<body>
<?php
$ans=0;
$msg='';
if($_SERVER['REQUEST_METHOD']=='GET' && $_GET['submit']){
    if(isset($_GET['guess']) && !empty($_GET['guess']) && is_numeric($_GET['guess'])){
        $ans = $_GET['guess'];
    }
    if (empty($_GET['guess'])){ 
        $msg = "Missing guess parameter";
      } else if ($_GET['guess'] < 1 ) {
        $msg = "Your guess is too short";
      } else if ( ! is_numeric($_GET['guess']) ) {
        $msg = "Your guess is not a number";
      } else if ( $_GET['guess'] < 42 ) {
        $msg = "Your guess is too low";
      } else if ( $_GET['guess'] > 42 ) {
        $msg = "Your guess is too high";
      } else {
        $msg = "Congratulations - You are right";
      }
}    

?>

<div class="calc">
<h1>Welcome to my guessing game</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="GET">
 <div>
<h1> You Guessed : <?= number_format($ans,2) ?></h1>
<h1><?= $msg ?></h1>
</div>
<input type="text" id="guess" name="guess" placeholder="Guess the right number."/><br>
<input type="submit" id="submit" value="Guess" name="submit">
</form>
</div>
</body>
</html>
