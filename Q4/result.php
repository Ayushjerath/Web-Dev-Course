<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>PHP Quiz</title>
    <style>
        body{
            background-color: white;
        }
        
        #page-wrap{
            padding-left: 100px;
            border: 2px solid blue;
            border-radius: 5px;
            color: #fff;
            background-color: lightsalmon;
        }
    </style>
</head>
<body>
	<div id="page-wrap">
		<h1 style="text-align:center;">Quiz Application using PHP</h1>
		<h2 style="text-align:center;">Quiz Answers</h2>
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $totalCorrect = 0;
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "B") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }      
            echo "<h3 id='results'> Correct Answer =  $totalCorrect</h3>";
            echo "<h3 id='results'> Result =  $totalCorrect / 10</h3>";
            $percent = $totalCorrect/10;
            echo "<h3 id='results'> Result Percentage =  $percent<h3>";
        ?>
        <form action="index.php" method="post" id="quiz">
            <input type="button" value="Return Back" class="previous">
        </form>
	</div>
</body>
</html>