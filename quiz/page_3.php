<?php
    session_start();
    $answer = $_GET['answer'];
    $_SESSION['score'] = 0;
    if($answer==2){
        $_SESSION['score']++;
    }
    echo 'score: ' . $_SESSION['score']
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 3</title>
    <style type="text/css">
        a{
            font-size: 30px;
        }


    </style>

</head>
<body>
    <h1>Question 2</h1>
    <h2>What is 1*1</h2>
    <a href="page_4.php?answer=2">2</a>
    <br>
    <a href="page_4.php?answer=3">3</a>
    <br>
    <a href="page_4.php?answer=1">1</a>
    <br>
    <a href="page_4.php?answer=4">4</a>




</body>
</html>
