<?php

$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;


if ($answer1 == "B") 
{ 
  $totalCorrect++; 
}

if($answer2 == "A")
{
  $totalCorrect++;
}

if($answer3 == "C")
{
  $totalCorrect++;
}

if($answer4 == "B")
{
  $totalCorrect++;
}

if($answer5 == "D")
{
  $totalCorrect++;
}
?>

<html>
<head>
  <title>Quiz Results</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div id="wrapper">
    
     <div id="jumbotronResults">
       <h3 id="title">Results</h3>
       </h3>
       <h3 id="results">
       <?php echo "<div id='results'>You got $totalCorrect / 5 correct.</div>"; ?>
       </h3> 
      <h3 id="thanks">
        Thanks for taking the test!
      </h3>
   </div>
    </div>
  </body>
</html>