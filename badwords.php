<?php

var_dump($_GET);

$badword = $_GET['badword'];
$text = $_GET['text-start'];
$length_text= strlen($text);

$clean_text= str_replace($badword, '***', $text);
$length_clean_text= strlen($clean_text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>

<body>
<h1>badwords</h1>
<p>parola da sostituire: <?php echo $badword ?></p>
<p>Testo: <?php echo $text ?></p>
<p>lunghezza testo: <?php echo $length_text; ?> caratteri</p>
<h2>Testo pulito</h2>
<p>testo pulito: <?php echo $clean_text; ?></p>
<p>lunghezza testo pulito: <?php echo $length_clean_text; ?> caratteri</p>

</body>

</html>