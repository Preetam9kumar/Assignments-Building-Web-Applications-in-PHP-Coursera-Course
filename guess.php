<!DOCTYPE html>
<html>
<head>
<title>Guessing Game for Preetam Kumar </title>
</head>
<style>
.calc-display{
margin:10px;
color:white;
background-color:black;
border-radius:8px;
text-align:center;
width:540px;
height:200px;
}
input,select{
margin:8px;
padding:8px;
border:3px solid black;
border-radius:8px;
font-size:25px;
}
.calc{
margin:auto;
border:5px solid black;
border-radius:8px;
width:560px;
height:500px;
}
#guess{margin-top:20px;}
#submit{
margin-top:50px;
}

</style>
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
<h1 style="padding-left:30px">Welcome to my guessing game</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="GET">
 <div class="calc-display">
<h1> You Guessed : <?= number_format($ans,2) ?></h1>
<h1><?= $msg ?></h1>
</div>
<input type="text" id="guess" name="guess" placeholder="Guess the right number."/><br>
<input type="submit" id="submit" value="Guess" name="submit">
</form>
</div>
</body>
</html>
