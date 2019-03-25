<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Math Quiz</title>
  </head>
  <body>
    <div class="container-fluid text-center py-5">

      <h1 class="mb-3">Results</h1>

      <?php
      if (isset($_POST['question-1-answers']) && isset($_POST['question-2-answers']) && isset($_POST['question-3-answers'])) {
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
      }


        $totalCorrect = 0;

        if ($answer1 == "A") {
           $totalCorrect++;
         } else {
           echo "Question 1 is Incorrect";
         }


        if ($answer2 == "B") {
           $totalCorrect++;
         } else {
           echo "<br>Question 2 is Incorrect<br>";
         }


        if ($answer3 == "D") {
           $totalCorrect++;
         } else {
           echo "Question 3 is Incorrect";
         }

        echo "<div id='results'>$totalCorrect / 3 correct</div>";
       ?>

         <a href="http://localhost:8080/quiz.php"><button class="btn btn-primary my-4">Retake Quiz</button></a>




    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
