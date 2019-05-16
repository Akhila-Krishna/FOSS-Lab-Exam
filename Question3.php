<html>
<head><center><h2>QUIZ</h2></center></head>
<form action="" method="POST">
<input type="submit" value="HISTORY" name="his">
<input type="submit" value="MATHS" name="mat">
<input type="submit" value="C" name="c">
</form>

<?php
if(isset($_POST['his']))
{
?>

<form action="" method="POST">
1)Capital of India?<input type="radio" name="cap1">Brussels
<input type="radio" name="cap2">Newdelhi<br><br>
2)Who discovered the principle of the lever?<input type="radio" name="lev1">Archimedes
<input type="radio" name="lev2">Euclid<br><br>
3)States in India?<input type="radio" name="st1">29
<input type="radio" name="st2">28<br><br><br><br>
<input type="submit" name="submit" value="Submit"></form>
</html>

<?php
if(isset($_POST['submit']))
{
$sum=0
?>
<script>
alert("Submited");</script>
<?php
$ans1=$_POST['cap1'];
$ans2=$_POST['cap2'];
$ans3=$_POST['lev1'];
$ans4=$_POST['lev2'];
$ans5=$_POST['st1'];
$ans6=$_POST['st2'];
if($ans2==on)
{
$sum=$sum+1;
}
if($ans3==on)
{
$sum=$sum+1;
}
if($ans5==on)
{

$sum=$sum+1;

}

?><br><br><?php

echo "YOUR TOTAL MARK IS :",$sum;

}

}

if(isset($_POST['mat']))

{

?>

<form action="" method="POST">

1)Square root of 25?<input type="radio" name="cap1">7

<input type="radio" name="cap2">5<br><br>

2)Square of 9<input type="radio" name="lev1">81

<input type="radio" name="lev2">64<br><br>

3)100/25<input type="radio" name="st1">4

<input type="radio" name="st2">5<br><br><br><br>

<input type="submit" name="submit" value="Submit"></form>

</html>

<?php

if(isset($_POST['submit']))

{

$sum=0

?>

<script>

alert("Submited");</script>

<?php

$ans1=$_POST['cap1'];

$ans2=$_POST['cap2'];

$ans3=$_POST['lev1'];

$ans4=$_POST['lev2'];

$ans5=$_POST['st1'];

$ans6=$_POST['st2'];

if($ans2==on)

{

$sum=$sum+1;

}

if($ans3==on)

{

$sum=$sum+1;

}

if($ans5==on)

{

$sum=$sum+1;

}

?><br><br><?php

echo "YOUR TOTAL MARK IS :",$sum;

}

}

if(isset($_POST['c']))

{

?>

<form action="" method="POST">

1)Function to print?<input type="radio" name="cap1">echo

<input type="radio" name="cap2">printf<br><br>

2)Function to read?<input type="radio" name="lev1">scanf

<input type="radio" name="lev2">read<br><br>

3)Format?<input type="radio" name="st1">.c

<input type="radio" name="st2">.gcc<br><br><br><br>

<input type="submit" name="submit" value="Submit"></form>

</html>

<?php

if(isset($_POST['submit']))

{

$sum=0

?>

<script>

alert("Submited");</script>

<?php

$ans1=$_POST['cap1'];

$ans2=$_POST['cap2'];

$ans3=$_POST['lev1'];

$ans4=$_POST['lev2'];

$ans5=$_POST['st1'];

$ans6=$_POST['st2'];

if($ans2==on)

{

$sum=$sum+1;

}

if($ans3==on)

{

$sum=$sum+1;

}

if($ans5==on)

{

$sum=$sum+1;

}

?><br><br><?php

echo "YOUR TOTAL MARK IS :",$sum;

}

}

?>


