
<?php

//get parola da sostituire
$word = $_GET['word'];
var_dump($word);

//paragrafo di testo 
$text ="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos tenetur non totam possimus quam quibusdam?";

$filteredText = str_replace($word , "***",$text); //cosa cercare , con cosa sostiurlo , dove devo cercarlo



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered text</title>
</head>
<body>
    <!-- paragrafo originale -->
    <p><?php echo "Lunghezza paragrafo originale".strlen($text)?></p>
    <p><?php echo $text ?></p>

    <!-- paragrafo filtrato -->
    <p><?php echo $filteredText ?>  </p>
    <p><?php echo "Lunghezza paragrafo filtrato".strlen($filteredText)?></p>

</body>
</html>