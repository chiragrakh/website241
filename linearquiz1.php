<!doctype HTML>
<html>
<head>
<title>Linear - Quiz</title>
<link rel="stylesheet" href="Home.css">
</head>
<body style="justify-content:center;">
<div class="header">
  <ul>
  <li><p> Design and Analysis of Algorithms</p></li>
  <li><a href="Home.html">Home</a></li>
 <li><div class="dropdown">
    <button class="dropbtn">Algorithms 
    </button>
    <div class="dropdown-content">
      <a href="linear.html">Linear Search</a>
      <a href="binary.html">Binary Search</a>
    </div>
  </div></li>
  
</ul>
</div>
<br><br>
<div class="daainfo">

    <div class="sechead">
        <a href="linear.html">Information</a>
        <a href="linearquiz1.php">Quiz</a>
        <a href="linearanimation.html">Animation</a>
        <a href="linearexplanation.html">Explanation</a>
        </div>

        <div style="margin-top:100px;">
  </div>
        <p>Linear Search Quiz: </p>

    <form method="GET" action="#" style="margin-top: 50px;">

        <h3>1.What is the <u>best</u> case for Linear Search?</h3>
        <input type="radio" name="q1" value="1"> O(nlogn)
        <br> 
        <input type="radio" name="q1" value="2"> O(logn)
        <br>
        <input type="radio" name="q1" value="3"> O(n)
        <br>
        <input type="radio" name="q1" value="4c"> O(1)
        <br>
        <hr>
        
        <!-- 2nd Question -->
        <h3>2.What is the <u>worst</u> case for Linear Search?</h3>
        <input type="radio" name="q2" value="1"> O(nlogn)
        <br> 
        <input type="radio" name="q2" value="2"> O(logn)
        <br>
        <input type="radio" name="q2" value="3c"> O(n)
        <br>
        <input type="radio" name="q2" value="4"> O(1)
        <br>
        <hr>
        
        <!-- 3rd question -->
        <h3>3.Which of the following is a disadvantage of linear search?</h3>
        <input type="radio" name="q3" value="1"> Requires more space
        <br> 
        <input type="radio" name="q3" value="2c"> Greater time complexities compared to other searching algorithms
        <br>
        <input type="radio" name="q3" value="3"> Not easy to understand
        <br>
        <input type="radio" name="q3" value="4"> Not easy to implement
        <br>
        <hr>
        
        <!--4th question-->
        <h3>4.Linear Search algorithm is used when _________.</h3>
        <input type="radio" name="q4" value="1c"> the size of the dataset is low
        <br> 
        <input type="radio" name="q4" value="2"> the size of dataset is large
        <br>
        <input type="radio" name="q4" value="3"> the dataset is unordered
        <br>
        <input type="radio" name="q4" value="4"> None of the above
        <br>
        <hr>
        
        <!--5th question-->
        <h3>5.The array is as follows:<b>[1,2,3,6,8,10]</b>. At which call is the element '6' is found? (By using linear search algorithm).</h3>
        <input type="radio" name="q5" value="1c"> 4<sup>th</sup> call
        <br> 
        <input type="radio" name="q5" value="2"> 3<sup>rd</sup> call
        <br>
        <input type="radio" name="q5" value="3"> 6<sup>th</sup> call
        <br>
        <input type="radio" name="q5" value="4"> 5<sup>th</sup> call
        <br>
        <hr>
        
        <!--6th question-->
        <h3>6.Can Linear Search algorithm and Binary Search algorithm be performed on an unordered list?</h3>
        <input type="radio" name="q6" value="1c"> Binary Search can't be used 
        <br> 
        <input type="radio" name="q6" value="2"> Linear Search can't be used
        <br>
        <input type="radio" name="q6" value="3"> Both cannot be used
        <br>
        <input type="radio" name="q6" value="4"> Both can be used
        <br>
        <hr>
        
        <!--7th question-->
        <h3>7.The <u>worst</u> case occur in Linear Search algorithm when: _________.</h3>
        <input type="radio" name="q7" value="1"> Element is somewhere in the middle of the array
        <br> 
        <input type="radio" name="q7" value="2"> Element is not in the array at all
        <br>
        <input type="radio" name="q7" value="3"> Element is at the end of the array
        <br>
        <input type="radio" name="q7" value="4c"> Both B And C are correct
        <br>
        <hr>
        
        <!--8th question-->
        <h3>8.The <u>average</u> case occur in linear search algorithm when: _________.</h3>
        <input type="radio" name="q8" value="1c"> Element is somewhere in the middle of the array
        <br> 
        <input type="radio" name="q8" value="2"> Element is not in the array at all
        <br>
        <input type="radio" name="q8" value="3"> Element is at the end of the array
        <br>
        <input type="radio" name="q8" value="4"> Both B And C are correct
        <br>
        <hr>
        
        <!--9th question-->
        <h3>9.The array is as follows:<b>[1,2,3,6,8,10]</b>. Given that the number '17' is to be searched. At which call it tells that there is no such element? (By using linear search algorithm).</h3>
        <input type="radio" name="q9" value="1"> 9<sup>th</sup> call
        <br> 
        <input type="radio" name="q9" value="2"> 10<sup>th</sup> call
        <br>
        <input type="radio" name="q9" value="3c"> 7<sup>th</sup> call
        <br>
        <input type="radio" name="q9" value="4"> 8<sup>th</sup> call
        <br>
        <hr>
        
        <!--10th question-->
        <h3>10.What is the recurrence relation for the Linear Search recursive algorithm?</h3>
        <input type="radio" name="q10" value="1"> T(n-2)+c
        <br> 
        <input type="radio" name="q10" value="2"> 2T(n-1)+c
        <br>
        <input type="radio" name="q10" value="3c"> T(n-1)+c
        <br>
        <input type="radio" name="q10" value="4"> T(n+2)+c
        <br>
        <hr>
        
        
        <input type="submit" class="button" value="Submit" name="button">
        <input type="reset" class="button" value="Reset All Responses">
        </form>
  </div>

<div class="footer">
<span>Copyright © 2022 All Rights Reserved.</span>
</div>
</body>
</html>

<?php
if(array_key_exists('button', $_GET)) {
$q1=$_GET["q1"];
$q2=$_GET["q2"];
$q3=$_GET["q3"];
$q4=$_GET["q4"];
$q5=$_GET["q5"];
$q6=$_GET["q6"];
$q7=$_GET["q7"];
$q8=$_GET["q8"];
$q9=$_GET["q9"];
$q10=$_GET["q10"];

$count=0;

if ($q1=="4c")
	$count++;

if ($q2=="3c")
	$count++;

if ($q3=="2c")
	$count++;

if ($q4=="1c")
	$count++;

if ($q5=="1c")
	$count++;

if ($q6=="1c")
	$count++;

if ($q7=="4c")
	$count++;

if ($q8=="1c")
	$count++;

if ($q9=="3c")
	$count++;

if ($q10=="3c")
	$count++;


echo "<div class='score'>Total Score: ".$count;
}

?>