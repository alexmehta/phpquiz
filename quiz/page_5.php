<?php
    session_start();
    $answer = $_GET['answer'];
    if($answer == 4){
        $_SESSION['score']++;
    }
    echo 'your score was: ' . $_SESSION['score'];
    session_destroy();

?>