<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach($_SESSION["array"] as $elemento) {
            echo "<li>$elemento</li>";
        }
    ?>
    </ul>
    <table style="border-collapse: collapse">
        <tr style="border: 1px solid black">
            <th style="border: 1px solid black">caratteri</th>
            <th style="border: 1px solid black">parole</th>
        </tr>
        <tr>
            <td style="border: 1px solid black"><?php echo $_SESSION["charCount"] ?></td>
            <td style="border: 1px solid black"><?php echo $_SESSION["wordCount"] ?></td>
        </tr>
    </table>
    <a href="frase.html">torna indietro</a>
</body>
</html>