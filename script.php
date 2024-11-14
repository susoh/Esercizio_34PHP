<?php
    session_start();
    if(!isset($_SESSION["array"])) {
        $_SESSION["array"] = array();
    }
    if(!isset($_SESSION["charCount"])) {
        $_SESSION["charCount"] = 0;
    }
    if(!isset($_SESSION["wordCount"])) {
        $_SESSION["wordCount"] = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = $_POST["frase"];
        $importanza = $_POST["importanza"];
        $char = 0;
        $word = 0;
        if($importanza == "4") {
            $_SESSION["array"] = $frase;
        }
        $char = strlen($frase);
        $word = str_word_count($frase);
        $_SESSION["charCount"] = $_SESSION["charCount"] + $char;
        $_SESSION["wordCount"] = $_SESSION["wordCount"] + $word;
    ?>

    <a href="frase.html">torna indietro</a>
    <?php
        header("Location: riepilogo.php");
    ?>
</body>
</html>