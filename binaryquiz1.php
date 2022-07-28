<!doctype HTML>
<html>
<head>
<title>Binary - Quiz</title>
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
        <a href="binary.html">Information</a>
        <a href="binaryquiz1.php">Quiz</a>
        <a href="binaryanimation.html">Animation</a>
        <a href="binaryexplanation.html">Explanation</a>
        </div>

        <div style="margin-top:100px;">
  </div>
        <p>Binary Search Quiz: </p>

        <form method="POST" action="#" style="margin-top: 50px;">

            <h3>1.What is the <u>worst</u> case time complexity of Binary Search?</h3>
            <input type="radio" name="q1" value="1"> O(nlogn)
            <br> 
            <input type="radio" name="q1" value="2c"> O(logn)
            <br>
            <input type="radio" name="q1" value="3"> O(n)
            <br>
            <input type="radio" name="q1" value="4"> O(n<sup>2</sup>)
            <br>
            <hr>
            
            <!-- 2nd Question -->
            <h3>2.What is the <u>average</u> case time complexity of Binary Search?</h3>
            <input type="radio" name="q2" value="1"> O(nlogn)
            <br> 
            <input type="radio" name="q2" value="2c"> O(logn)
            <br>
            <input type="radio" name="q2" value="3"> O(n)
            <br>
            <input type="radio" name="q2" value="4"> O(n<sup>2</sup>)
            <br>
            <hr>
            
            <!-- 3rd question -->
            <h3>3.Which of the following is not an application of Binary Search?</h3>
            <input type="radio" name="q3" value="1"> To find upper/lower bouund in an ordered sequence
            <br> 
            <input type="radio" name="q3" value="2"> Union of intervals
            <br>
            <input type="radio" name="q3" value="3"> Debugging
            <br>
            <input type="radio" name="q3" value="4c"> To search in unordered list
            <br>
            <hr>
            
            <!--4th question-->
            <h3>4.Binary Search can be categorized into which of the following?</h3>
            <input type="radio" name="q4" value="1"> Brute Force Technique
            <br> 
            <input type="radio" name="q4" value="2c"> Divide And Conquer
            <br>
            <input type="radio" name="q4" value="3"> Greedy Technique
            <br>
            <input type="radio" name="q4" value="4"> Dynamic Programming
            <br>
            <hr>
            
            <!--5th question-->
            <h3>5.The array is as follows:<b>[5,6,77,88,99]</b> and key=88. How many iterations are done until the element is found?</h3>
            <input type="radio" name="q5" value="1"> 1
            <br> 
            <input type="radio" name="q5" value="2"> 3
            <br>
            <input type="radio" name="q5" value="3"> 4
            <br>
            <input type="radio" name="q5" value="4c"> 2
            <br>
            <hr>
            
            <!--6th question-->
            <h3>6.The array is as follows:<b>[45,77,89,90,94,99,100]</b> and key=100. What are the mid-values(corresponding array element) generated in the first and second iterations?</h3>
            <input type="radio" name="q6" value="1c"> 90 & 99 
            <br> 
            <input type="radio" name="q6" value="2"> 90 & 100
            <br>
            <input type="radio" name="q6" value="3"> 89 & 94
            <br>
            <input type="radio" name="q6" value="4"> 94 & 99
            <br>
            <hr>
            
            <!--7th question-->
            <h3>7.The minimum number of comparisions for a particular record among 32 sorted records through Binary Search method will be: _________.</h3>
            <input type="radio" name="q7" value="1"> 16
            <br> 
            <input type="radio" name="q7" value="2c"> 5
            <br>
            <input type="radio" name="q7" value="3"> 8
            <br>
            <input type="radio" name="q7" value="4"> 2
            <br>
            <hr>
            
            <!--8th question-->
            <h3>8.Which of the following is the recurrence relation for Binary Search?</h3>
            <input type="radio" name="q8" value="1c"> T(n)=T(n/2)+1
            <br> 
            <input type="radio" name="q8" value="2"> (n)=T(n/2)+2
            <br>
            <input type="radio" name="q8" value="3"> T(n)=2T(n-1)+1
            <br>
            <input type="radio" name="q8" value="4"> T(n)=T(n-2)+1
            <br>
            <hr>
            
            <!--9th question-->
            <h3>9.Main difference between Binary Search and Binary Search Tree is: _________.</h3>
            <input type="radio" name="q9" value="1c"> 9<sup>th</sup> Binary Search refers to array based algorithms while Binary Search Tree refers to Tree based data structure
            <br> 
            <input type="radio" name="q9" value="2"> 10<sup>th</sup> Binary Search refers to Greedy Technique while Binary Search Tree refers to Dynamic Programming
            <br>
            <input type="radio" name="q9" value="3"> 7<sup>th</sup> Both Options A & B are correct
            <br>
            <input type="radio" name="q9" value="4"> 8<sup>th</sup> Both Options, A & B are incorrect
            <br>
            <hr>
            
            <!--10th question-->
            <h3>10.In general, the Binary Search method needs no more than _________ comparisons.</h3>
            <input type="radio" name="q10" value="1"> [log2n]-1
            <br> 
            <input type="radio" name="q10" value="2"> [logn]+1
            <br>
            <input type="radio" name="q10" value="3"> [log2n]
            <br>
            <input type="radio" name="q10" value="4c"> [log2n]+1
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
if(array_key_exists('button', $_POST))
{
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];
$q7=$_POST["q7"];
$q8=$_POST["q8"];
$q9=$_POST["q9"];
$q10=$_POST["q10"];

$count=0;

if ($q1=="2c")
	$count++;

if ($q2=="2c")
	$count++;

if ($q3=="4c")
	$count++;

if ($q4=="2c")
	$count++;

if ($q5=="4c")
	$count++;

if ($q6=="1c")
	$count++;

if ($q7=="2c")
	$count++;

if ($q8=="1c")
	$count++;

if ($q9=="1c")
	$count++;

if ($q10=="4c")
	$count++;

  echo "<div class='score'>Total Score: ".$count;
}
?>