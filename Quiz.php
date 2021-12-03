<?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            echo "Correct answer " .$totalCorrect. "/ 5 correct<br>";
            echo "Percentage: " . ($totalCorrect * 20) . "%<br>";

            echo "<br>";
            echo "Solution:<br>";
            echo "Question 1: What is the chemical formula for water?<br>";
            echo "You answered: " . $answer1 . "<br>";
            echo "Correct answer: H20<br><br>";

            echo "Question 2:Which club does Cristiano Ronaldo play at?<br>";
            echo "You answered: " . $answer2 . "<br>";
            echo "Correct answer: Manchester United<br><br>";

            echo "Question 3: Who is the president of U.S.?<br>";
            echo "You answered: " . $answer3 . "<br>";
            echo "Correct answer: Joe Biden<br><br>";

            echo "Question 4: Who is lead hero of the film The Last Samurai?<br>";
            echo "You answered: " . $answer4 . "<br>";
            echo "Correct answer: Tom Cruise<br><br>";

            echo "Question 5: Where was Alber Einstein born?<br>";
            echo "You answered: " . $answer5 . "<br>";
            echo "Correct answer: Somewhere<br><br>";

?>